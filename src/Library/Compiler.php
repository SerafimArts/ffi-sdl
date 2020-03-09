<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Library;

use Composer\EventDispatcher\Event;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Plugin\PluginInterface;
use Composer\Composer;
use Composer\IO\IOInterface;

/**
 * Class Compiler
 */
class Compiler implements PluginInterface, EventSubscriberInterface
{
    /**
     * @var Composer
     */
    private Composer $composer;

    /**
     * @var IOInterface
     */
    private IOInterface $io;

    /**
     * @param Composer $composer
     * @param IOInterface $io
     * @return void
     */
    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'post-autoload-dump' => 'runCompiler',
        ];
    }

    /**
     * @param Event $event
     * @return void
     */
    public function runCompiler(Event $event): void
    {
        try {
            $this->io->write(\sprintf('Loading SDL headers compiler (<info>v%s</info>)', Library::getVersion()));

            $processor = new PreProcessor(Library::getVersion());
            $result = $processor->file(Library::getHeadersOriginalPathname());

            \file_put_contents(Library::getHeadersCompiledPathname(), $result);

            $this->io->write(\vsprintf('SDL headers was successfully compiled in <comment>%s</comment>', [
                \realpath(Library::getHeadersCompiledPathname())
            ]));
        } catch (\Throwable $e) {
            $this->io->write('<error>' . $e->getMessage() . '</error>');
        }
    }
}
