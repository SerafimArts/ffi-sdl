<?php

declare(strict_types=1);

use Serafim\CastXml\CastXml;
use Symfony\Component\DomCrawler\Crawler;

require __DIR__ . '/../vendor/autoload.php';

const DIR_OUTPUT = __DIR__ . '/../resources';
const DIR_HEADERS = DIR_OUTPUT . '/headers';

const FILE_METADATA = DIR_OUTPUT . '/metadata.xml';
const FILE_HEADERS = DIR_HEADERS . '/SDL.h';
const FILE_PHPSTORM_META = DIR_OUTPUT . '/.phpstorm.meta.php';


// Build XML metadata
if (!is_file(FILE_METADATA)) {
    $result = (new CastXml())
        ->parse(FILE_HEADERS, DIR_HEADERS)
    ;

    file_put_contents(FILE_METADATA, $result->getContents());
}

$xml = new Crawler(file_get_contents(FILE_METADATA));
$root = $xml->first();



//
// Collect names
//

$names = [
    'void *',

    'bool',

    'float',
    'double',
    'long double',

    'char',
    'signed char',
    'unsigned char',
    'int',
    'signed int',
    'unsigned int',
    'long',
    'signed long',
    'unsigned long',
    'long long',
    'signed long long',
    'unsigned long long',

    'intptr_t',
    'uintptr_t',
    'size_t',
    'ssize_t',
    'ptrdiff_t',
    'off_t',
    'va_list',
    '__builtin_va_list',
    '__gnuc_va_list',

    // stdint.h
    'int8_t',
    'uint8_t',
    'int16_t',
    'uint16_t',
    'int32_t',
    'uint32_t',
    'int64_t',
    'uint64_t',
];

foreach ($root->children('Typedef') as $typedef) {
    $name = $typedef->attributes->getNamedItem('name')->value;

    $file = $typedef->attributes->getNamedItem('file')->value;
    $file = $root->filter("File[id=\"$file\"]")
        ->first()
        ->attr('name');

    if ($name === '' || \str_starts_with($name, '_') || !\str_contains($file, 'resources/headers')) {
        continue;
    }

    echo " - typedef $name\n";

    $names[] = $name;
}

$names = \array_unique($names);

$exportNames = \str_replace(['array (', ')'], ['', '    '], \var_export($names, true));
$exportNames = \preg_replace('/\d+\h*=>\h*/', '      ', $exportNames);

//
// Collect structures/unions
//

$structures = [];

function find_terminal_type(Crawler $root, string $id): Crawler
{
    $reference = $root->filter("[id=\"$id\"]")
        ->first();
    $name = $reference->nodeName();

    if (\in_array($name, ['Typedef', 'PointerType', 'ElaboratedType', 'CvQualifiedType'], true)) {
        return find_terminal_type(
            root: $root,
            id: $reference->attr('type'),
        );
    }

    return $reference;
}

function is_pointer(Crawler $root, Crawler $void): bool
{
    return $root->filter('PointerType[type="' . $void->attr('id') . '"]')
        ->count() > 0;
}

function find_php_type(Crawler $root, string $id): array
{
    $type = find_terminal_type($root, $id);

    return match ($type->nodeName()) {
        'FundamentalType' => match($type->attr('name')) {
            'float', 'double' => ['float', 'float'],
            '_Bool' => ['bool|int', 'bool|int<0, 1>'],
            'void' => is_pointer($root, $type) ? ['\FFI\CData|null', '\FFI\CData|null'] : ['void', 'void'],
            default => [
                'int',
                \str_contains($type->attr('name'), 'unsigned') || \str_contains($type->attr('name'), 'uint')
                    ? match ((int)$type->attr('size')) {
                        8 => 'int<0, 255>',
                        16 => 'int<0, 65535>',
                        32 => 'int<0, 4294967295>',
                        64 => 'int<0, 18446744073709551615>',
                        default => 'int<0, ' . (2**(int)$type->attr('size')) . '>',
                    }
                    : match ((int)$type->attr('size')) {
                        8 => 'int<-128, 127>',
                        16 => 'int<-32768, 32767>',
                        32 => 'int<-2147483648, 2147483647>',
                        64 => 'int<-9223372036854775808, 9223372036854775807>',
                        default => 'int',
                    }
            ]
        },
        'ArrayType' => ['array', 'list<' . find_php_type($root, $type->attr('type'))[1] . '>'],
        'FunctionType' => ['\FFI\CData|\Closure|null', 'callable|null'],
        'Enumeration' => ['int', 'int<-2147483648, 2147483647>'],
        'Struct', 'Union' => ['?\FFI\CData', '\FFI\CData|null|\PHPSTORM_META\\' . $type->attr('name')],
        default => ['mixed', 'mixed (' . $type->nodeName() . ')']
    };
}

foreach ($root->children('Typedef') as $typedef) {
    $name = $typedef->attributes->getNamedItem('name')->value;

    if ($name === '' || \str_starts_with($name, '_')) {
        continue;
    }

    $type = find_terminal_type($root, $typedef->attributes->getNamedItem('type')->value);
    $typeId = $type->attr('id');

    if ($type->count() === 0) {
        continue;
    }

    if ($type->nodeName() === 'Struct' || $type->nodeName() === 'Union') {
        $typeName = $type->nodeName();
        echo " - $typeName $name\n";

        $template = <<<PHP

            /**
             * @internal Internal interface to ensure precise type inference
             * @deprecated Internal interface to ensure precise type inference
             * @mixin \FFI\CData
             */
            final class $name
            {

        PHP;

        foreach ($root->children("Field[context=\"$typeId\"]") as $field) {
            $fieldName = $field->attributes->getNamedItem('name')->value;
            [$phpType, $docblockType] = find_php_type($root, $field->attributes->getNamedItem('type')->value);

            $template .= <<<PHP
                        /**
                         * @var $docblockType
                         */
                        public $phpType \$$fieldName;


                PHP;
        }

        $structures[] = $template . <<<'PHP'
                }
            PHP;
    }
}

$exportStructures = \implode("\n\n", $structures);

//
// Collect functions
//

$exportAutocompletion = <<<'PHP'

        interface SDL
        {

    PHP;

foreach ($root->filter('Function[context="_1"]') as $fun) {
    $fun = new Crawler($fun);
    $name = $fun->attr('name');

    $file = $fun->attr('file');
    $file = $root->filter("File[id=\"$file\"]")
        ->first()
        ->attr('name');

    if ($name === '' || \str_starts_with($name, '_') || !\str_contains($file, 'resources/headers')) {
        continue;
    }

    [$phpType, $docblockType] = find_php_type($root, $fun->attr('returns'));

    echo " - function $name\n";

    $arguments = [];

    foreach ($fun->children() as $i => $arg) {
        if ($arg->nodeName !== 'Argument') {
            continue;
        }

        $arg = new Crawler($arg);
        $arguments[$arg->attr('name') ?: '_' . $i]
            = find_php_type($root, $arg->attr('type'));
    }

    $exportAutocompletion .= <<<PHP
                /**
        PHP;

    foreach ($arguments as $argName => [$argType, $argPhpdoc]) {
        $exportAutocompletion .= <<<PHP

                     * @param $argPhpdoc \$$argName
            PHP;
    }

    $exportAutocompletion .= <<<PHP

                 * @return $docblockType
                 */
                public function $name(
        PHP;

    foreach ($arguments as $argName => [$argType, $argPhpdoc]) {
        $exportAutocompletion .= <<<PHP
            $argType \$$argName,
            PHP;
    }

    $exportAutocompletion .= <<<PHP
        ): $phpType;


        PHP;
}

$exportAutocompletion .= <<<'PHP'

        }
    PHP;


\file_put_contents(FILE_PHPSTORM_META, <<<PHP
<?php

namespace PHPSTORM_META {

    registerArgumentsSet('sdl_types', $exportNames);

    expectedArguments(\Serafim\SDL\SDL::type(), 0, argumentsSet('sdl_types'));

    override(\Serafim\SDL\SDL::type(), map([
        '' => '@|\PHPSTORM_META\@|\FFI\CData',
    ]));

    expectedArguments(\Serafim\SDL\SDL::new(), 0, argumentsSet('sdl_types'));

    override(\Serafim\SDL\SDL::new(), map([
        '' => '@|\PHPSTORM_META\@|\FFI\CData',
    ]));

    expectedArguments(\Serafim\SDL\SDL::type(), 0, argumentsSet('sdl_types'));

    override(\Serafim\SDL\SDL::type(), map([
        '' => '@|\PHPSTORM_META\@|\FFI\CData',
    ]));

$exportStructures

}

namespace Serafim\SDL {

    $exportAutocompletion

}
PHP);
