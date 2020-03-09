<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Library;

/**
 * Class Preprocessor
 */
class PreProcessor
{
    /**
     * @var string
     */
    private const PCRE_PATTERN =
        '/\\G(?|(?:(?:\\/\\*.*?\\*\\/)(*MARK:T_GROUP_COMMENT))|(?:(?:^\\h*\\/\\/[^\\n]+)(*MARK:T_COMMENT))|' .
        '(?:(?:^\\h*#\\h*ifdef\\h((?:\\\\s|[^\\n])+))(*MARK:T_IFDEF))|(?:(?:^\\h*#\\h*endif\\b)(*MARK:T_ENDIF))|' .
        '(?:(?:^\\h*#\\h*if\\h+version\\h*([<>=]+)\\h*((?:\\\\s|[^\\n])+))(*MARK:T_IF_VERSION))|' .
        '(?:(?:[^\\n]+)(*MARK:T_SOURCE))|(?:(?:\\n+)(*MARK:T_NEW_LINE)))/Ssum';

    /**
     * @var bool[]
     */
    private array $blockers = [];

    /**
     * @var string
     */
    private string $version;

    /**
     * Reader constructor.
     *
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
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
     * @param string $pathname
     * @return string
     */
    public function file(string $pathname): string
    {
        $source = @\file_get_contents($pathname);

        if (! \is_string($source)) {
            throw new \RuntimeException('Error while reading file ' . $pathname);
        }

        return $this->source($source);
    }

    /**
     * @param string $source
     * @return string
     */
    public function source(string $source): string
    {
        $this->blockers = [];

        $result = '';

        foreach ($this->lex($source) as $name => $value) {
            switch ($name) {
                case 'T_IFDEF':
                    if (! $this->assertIfDef($value[1])) {
                        $this->blockers[] = true;
                    }
                    continue 2;

                case 'T_IF_VERSION':
                    if (! $this->assertVersion($value[1], $value[2])) {
                        $this->blockers[] = true;
                    }
                    continue 2;

                case 'T_ENDIF':
                    if (\count($this->blockers)) {
                        \array_shift($this->blockers);
                    }
                    continue 2;
            }

            if (\count($this->blockers) === 0) {
                $result .= $value[0];
            }
        }

        return $result;
    }

    /**
     * @param string $def
     * @return bool
     */
    private function assertIfDef(string $def): bool
    {
        switch (\strtolower(\trim($def))) {
            case '__win32__':
                return \PHP_OS_FAMILY === 'Windows';

            case '__linux__';
                return \PHP_OS_FAMILY === 'Linux';

            case '_win64':
                return \PHP_OS_FAMILY === 'Windows' && \PHP_INT_SIZE === 8;

            case '_win32':
                return \PHP_OS_FAMILY === 'Windows' && \PHP_INT_SIZE !== 8;
        }

        return true;
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
