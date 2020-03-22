<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Support;

/**
 * Trait SingletonTrait
 */
trait SingletonTrait
{
    /**
     * @var self|null
     */
    private static ?self $instance = null;

    /**
     * @return $this
     */
    public static function getInstance(): self
    {
        return self::$instance ??= new static();
    }

    /**
     * @param SingletonTrait|null $instance
     * @return void
     */
    public static function setInstance(?self $instance): void
    {
        self::$instance = $instance;
    }
}
