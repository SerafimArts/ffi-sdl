<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Compiler;

/**
 * Class Preprocessor
 */
class PreProcessor
{
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
        '(?:(?:^\\h*#\\h*if\\h+version\\h*([<>=]+)\\h*((?:\\\\s|[^\\n])+))(*MARK:T_IF_VERSION))|' .
        '(?:(?:[^\\n]+)(*MARK:T_SOURCE))|(?:(?:\\n+)(*MARK:T_NEW_LINE)))/Ssum';

    /**
     * @var bool[]
     */
    private array $assertions = [];

    /**
     * @var string
     */
    private string $version;

    /**
     * @var \Closure|null
     */
    private ?\Closure $debug = null;

    /**
     * Reader constructor.
     *
     * @param string $version
     * @param \Closure|null $debug
     */
    public function __construct(string $version, \Closure $debug = null)
    {
        $this->version = $version;
        $this->debug = $debug;
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
     * @param string|null $dir
     * @return string
     * @throws \RuntimeException
     */
    public function source(string $source, string $dir = null): string
    {
        $this->assertions = [];

        $result = '';

        foreach ($this->lex($source) as $name => $value) {
            $prefix = \count($this->assertions) . ':';

            switch ($name) {
                case 'T_INCLUDE':
                    $file = \stripslashes(\trim($value[1], '"<>'));

                    $result .= $this->file(($dir ?? '.') . '/' . $file);
                    break;
                case 'T_IFNDEF':
                    $this->assertions[$prefix . $value[1]] = ! $this->assertIfDef($value[1]);

                    continue 2;

                case 'T_IFDEF':
                    $this->assertions[$prefix . $value[1]] = $this->assertIfDef($value[1]);

                    continue 2;

                case 'T_IF_VERSION':
                    $this->assertions[$prefix . $value[1] . $value[2]] = $this->assertVersion($value[1], $value[2]);
                    continue 2;

                case 'T_ENDIF':
                    if (\count($this->assertions)) {
                        \array_pop($this->assertions);
                        continue 2;
                    }
                    break;
            }

            if ($this->debug) {
                ($this->debug)($value[0], $this->assertions);
            }

            if ($this->matchAllAssertions($this->assertions)) {
                $result .= $value[0];
            }
        }

        return $result;
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
     * @param string $def
     * @return bool
     */
    private function assertIfDef(string $def): bool
    {
        switch (\strtolower(\trim($def))) {
            case '__win32__':
            case '__win32':
            case 'win32':
            case '__cygwin__':
            case '__cygwin':
            case 'cygwin':
            case '__mingw32__':
            case '__mingw32':
            case 'mingw32':
            case '__windows__':
            case '__windows':
            case '__win':
                return \PHP_OS_FAMILY === 'Windows';

            case '_win64':
            case '_m_ia64':
            case '_m_amd64':
                return \PHP_OS_FAMILY === 'Windows' && \PHP_INT_SIZE === 8;

            case '_win32':
                return \PHP_OS_FAMILY === 'Windows' && \PHP_INT_SIZE !== 8;

            case '__linux__':
            case '__linux':
            case 'linux':
                return \PHP_OS_FAMILY === 'Linux';

            case '__osx__':
            case '__osx':
            case 'osx':
            case '__apple__':
            case '__apple':
            case 'apple':
            case '__macosx__':
            case '__macosx':
            case 'macosx':
                return \PHP_OS_FAMILY === 'Darwin';

            case '__freebsd__':
            case '__freebsd':
            case 'freebsd':
            case '__freebsd_kernel__':
            case '__freebsd_kernel':
            case 'freebsd_kernel':
            case '__dragonfly__':
            case '__dragonfly':
            case 'dragonfly':
            case '__bsdi__':
            case '__bsdi':
            case 'bsdi':
            case '__openbsd__':
            case '__openbsd':
            case 'openbsd':
                return \PHP_OS_FAMILY === 'BSD';

            case '__sun__':
            case '__sun':
            case 'sun':
            case '__svr4__':
            case '__svr4':
            case 'svr4':
            case '__solaris__':
            case '__solaris':
            case 'solaris':
                return \PHP_OS_FAMILY === 'Solaris';

            case '__lp64__':
                return \PHP_INT_SIZE === 8;

            case '__android__':
            case '__android':
            case 'android':
            case 'egl_khr_platform_android':
                // TODO Android
            case '__ios__':
            case '__ios':
            case 'ios':
            case '__iphoneos__':
            case '__iphoneos':
            case 'iphoneos':
                // TODO IPhone
                return false;
        }

        return false;
    }

    /**
     * @param string $cmp
     * @param string $version
     * @return bool
     */
    private function assertVersion(string $cmp, string $version): bool
    {
        $version = \trim($version);

        switch ($cmp) {
            case '>':
                return \version_compare($this->version, $version) > 0;
            case '<':
                return \version_compare($this->version, $version) < 0;
            case '>=':
                return \version_compare($this->version, $version) >= 0;
            case '<=':
                return \version_compare($this->version, $version) <= 0;
            case '=':
            case '==':
            case '===':
                return \version_compare($this->version, $version) === 0;

            default:
                throw new \LogicException('Unsupported operator: ' . $cmp);
        }
    }
}
