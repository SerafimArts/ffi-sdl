<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

/**
 * @param string $code
 * @return array|string[]
 */
function get_defined_structures(string $code): array
{
    \preg_match_all('/^\h*(?:final\h+)?class\h(\w+)/ium', $code, $matches);

    return $matches[1];
}

/**
 * @param string $name
 * @return string
 */
function generate(string $name): string
{
    return \sprintf(<<<'TEMPLATE'
        /** @mixin \FFI\CPtr */
        class %1$sPtr extends %1$s
        {
            private function __construct() {}
            private function offsetGet(int $i): %1$s {}
            private function offsetSet(int $i, %1$s $d): void {}
        }

    TEMPLATE, $name);
}


$headers = \file_get_contents(__DIR__ . '/../resources/sdl.h');
$headers .= \implode("\n", [
    'CScalar*',
    'CScalar**',
    'CInt*',
    'CInt**',
    'CFloat*',
    'CFloat**',
    'CChar*',
    'CChar**',
    'CBool*',
    'CBool**',
]);

$pointers = [];

foreach (get_defined_structures(\file_get_contents(__DIR__ . '/../resources/stubs/structures.php')) as $name) {
    $length = 0;

    while (\preg_match(\sprintf('/\b%s/isum', \preg_quote($name, '/') . \str_repeat('\h*\*', ++$length)), $headers)) {
        $pointers[] = generate($name . \str_repeat('Ptr', $length - 1));
    }
}


\file_put_contents(__DIR__ . '/../resources/stubs/generated.php', \implode("\n", [
    '<?php',
    'namespace Serafim\SDL {',
    ...\array_values($pointers),
    '}',
]));
