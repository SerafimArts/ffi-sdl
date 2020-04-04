<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SDL\Loader;

/**
 * Class Preprocessor
 */
class PreProcessor
{
    /**
     * @var string
     */
    private const PATTERN_VER = '/^\d+(\.\d+)*$/um';

    /**
     * @var string
     */
    private const PCRE_PATTERN =
        '/\\G(?|(?:(?:\\/\\*.*?\\*\\/)(*MARK:T_GROUP_COMMENT))|' .
        '(?:(?:^\\h*\\/\\/[^\\n]+)(*MARK:T_COMMENT))|' .
        '(?:(?:^\\h*#\\h*include\\h((?:\\\\s|[^\\n])+))(*MARK:T_INCLUDE))|' .
        '(?:(?:^\\h*#\\h*ifdef\\h((?:\\\\s|[^\\n])+))(*MARK:T_IFDEF))|' .
        '(?:(?:^\\h*#\\h*ifndef\\h((?:\\\\s|[^\\n])+))(*MARK:T_IFNDEF))|' .
        '(?:(?:^\\h*#\\h*endif\\b)(*MARK:T_ENDIF))|' .
        '(?:(?:^\\h*#\\h*if\\h(.+?)\\h*([!<>=]+)\\h*((?:\\\\s|[^\\n])+))(*MARK:T_IF))|' .
        '(?:(?:[^\\n]+)(*MARK:T_SOURCE))|(?:(?:\\n+)(*MARK:T_NEW_LINE)))/Ssum';

    /**
     * @var array|string[]
     */
    private array $defines = [];

    /**
     * @var array|string[]
     */
    private array $includes = [];

    /**
     * PreProcessor constructor.
     */
    public function __construct()
    {
        $this->bootDefaultDefines();
        $this->bootDefaultIncludeDirectory();
    }

    /**
     * @return void
     */
    private function bootDefaultIncludeDirectory(): void
    {
        $this->includes[] = __DIR__ . '/../../resources';
    }

    /**
     * @param string $dir
     * @return void
     */
    public function addIncludeDirectory(string $dir): void
    {
        $this->includes[] = $dir;
    }

    /**
     * @param string $define
     * @param string $value
     * @return void
     */
    private function defineWrapped(string $define, string $value): void
    {
        $this->define('_' . $define, $value);
        $this->define('__' . $define, $value);
        $this->define('__' . $define . '__', $value);
    }

    /**
     * @return void
     */
    private function bootDefaultDefines(): void
    {
        $define = function (string ...$defines): void {
            foreach ($defines as $def) {
                $this->defineWrapped($def, '1');
            }
        };

        $define(\PHP_INT_SIZE === 8 ? 'amd64' : 'i386');

        switch (\PHP_OS_FAMILY) {
            case 'Windows':
                $define('cygwin', 'mingw32', 'windows', 'win');
                $define(\PHP_INT_SIZE === 8 ? 'win64' : 'win32');
                break;

            case 'Linux':
                $define('linux');
                break;

            case 'Darwin':
                $define('osx', 'apple', 'macosx');
                break;

            case 'BSD':
                $define('freebsd', 'freebsd_kernel', 'dragonfly', 'bsdi', 'openbsd');
                break;

            case 'Solaris':
                $define('sun', 'svr4', 'solaris');
                break;
        }
    }

    /**
     * @param string $define
     * @param string $value
     * @return void
     */
    public function define(string $define, string $value): void
    {
        $this->defines[$define] = $value;
    }

    /**
     * @param string $define
     * @return void
     */
    public function undef(string $define): void
    {
        unset($this->defines[$define]);
    }

    /**
     * @param string $pathname
     * @return string
     * @throws \RuntimeException
     */
    public function file(string $pathname): string
    {
        $source = @\file_get_contents($pathname = \trim($pathname));

        if (! \is_string($source)) {
            $last = \error_get_last();

            throw new \RuntimeException('Error while reading file ' . $pathname . ': ' . $last['message']);
        }

        return $this->source($source, \dirname($pathname));
    }

    /**
     * @param string $source
     * @param string|null $cwd
     * @return string
     * @throws \RuntimeException
     */
    public function source(string $source, string $cwd = null): string
    {
        $result = '';

        foreach ($this->execute($source, $cwd) as $value) {
            $result .= $value;
        }

        return $result;
    }

    /**
     * @param string $file
     * @param string|null $cwd
     * @return string
     */
    private function lookup(string $file, string $cwd = null): string
    {
        if (\is_string($cwd) && \is_file($cwd . '/' . $file)) {
            return $cwd . '/' . $file;
        }

        foreach ($this->includes as $dir) {
            if (\is_file($dir . '/' . $file)) {
                return $dir . '/' . $file;
            }
        }

        return './' . $file;
    }

    /**
     * @param string $source
     * @param string|null $dir
     * @return \Traversable|string[]
     */
    private function execute(string $source, string $dir = null): \Traversable
    {
        $assertions = [];

        $lexemes = $this->lex(\str_replace("\r", '', $source));

        foreach ($lexemes as $name => $value) {
            $prefix = \count($assertions) . ':';

            switch ($name) {
                case 'T_INCLUDE':
                    $file = \stripslashes(\trim(\trim($value[1]), '"<>'));

                    yield $this->file($this->lookup($file, $dir));
                    break;

                case 'T_IFNDEF':
                    $assertions[$prefix . $value[1]] = ! $this->assertIfDef($value[1]);
                    continue 2;

                case 'T_IFDEF':
                    $assertions[$prefix . $value[1]] = $this->assertIfDef($value[1]);
                    continue 2;

                case 'T_IF':
                    $assertions[$prefix . $value[0]] = $this->assertIf(
                        $this->preprocess($value[1]),
                        $this->preprocess($value[3]),
                        $value[2]
                    );
                    continue 2;

                case 'T_ENDIF':
                    if (\count($assertions)) {
                        \array_pop($assertions);
                        continue 2;
                    }
                    break;
            }

            if ($this->matchAllAssertions($assertions)) {
                yield $this->preprocess($value[0]);
            }
        }
    }

    /**
     * @param string $sources
     * @return iterable|array[]
     */
    private function lex(string $sources): iterable
    {
        \preg_match_all(self::PCRE_PATTERN, $sources, $matches, \PREG_SET_ORDER);

        foreach ($matches as $match) {
            yield $match['MARK'] => $match;
        }
    }

    /**
     * @param string $source
     * @return string
     */
    private function preprocess(string $source): string
    {
        foreach ($this->defines as $from => $to) {
            $pattern = \sprintf('/\b%s\b/sum', \preg_quote($from, '/'));

            $source = \preg_replace($pattern, $to, $source);
        }

        return $source;
    }

    /**
     * @param string $def
     * @return bool
     */
    private function assertIfDef(string $def): bool
    {
        return isset($this->defines[$def]);
    }

    /**
     * @param string $a
     * @param string $b
     * @param string $operator
     * @return bool
     */
    private function assertIf(string $a, string $b, string $operator): bool
    {
        if (\preg_match(self::PATTERN_VER, $a) && \preg_match(self::PATTERN_VER, $b)) {
            return $this->compare(\version_compare($a, $b), $operator);
        }

        return $this->compare($a <=> $b, $operator);
    }

    /**
     * @param int $result
     * @param string $operator
     * @return bool
     */
    private function compare(int $result, string $operator): bool
    {
        switch ($operator) {
            case '>':
                return $result > 0;

            case '<':
                return $result < 0;

            case '>=':
                return $result >= 0;

            case '<=':
                return $result <= 0;

            case '=':
            case '==':
            case '===':
                return $result === 0;

            case '<>':
            case '!=':
            case '!==':
                return $result !== 0;

            default:
                throw new \LogicException('Unsupported operator: ' . $operator);
        }
    }

    /**
     * @param array $assertions
     * @return bool
     */
    private function matchAllAssertions(array $assertions): bool
    {
        foreach ($assertions as $assertion) {
            if (! $assertion) {
                return false;
            }
        }

        return true;
    }
}
