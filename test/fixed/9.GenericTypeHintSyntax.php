<?php

/**
 * @see       https://github.com/laminas/laminas-coding-standard for the canonical source repository
 * @copyright https://github.com/laminas/laminas-coding-standard/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-coding-standard/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

use IteratorAggregate;

class GenericTypeHintSyntax
{
    /** @psalm-var IteratorAggregate */
    private $config;

    /** @var IteratorAggregate<string,string> */
    private $bar;

    /**
     * @param IteratorAggregate<string,string> $bar
     */
    public function __construct(ArrayObject $bar)
    {
        $this->bar = $bar;
    }

    /**
     * @param array<string, mixed> $config
     */
    public function doSomethingWithArray(array $config): void
    {
        $this->config = $config;
    }
}
