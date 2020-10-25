<?php

/**
 * @see       https://github.com/laminas/laminas-coding-standard for the canonical source repository
 * @copyright https://github.com/laminas/laminas-coding-standard/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-coding-standard/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

use Generic;
use IteratorAggregate;
use Traversable;

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

    /**
     * @param Generic<array> $a
     */
    public function genericWithoutItemsSpecification(Generic $a)
    {
    }

    /**
     * @param array[]&Traversable $a
     */
    public function traversableIntersection(Traversable $a)
    {
    }

    /**
     * @param Traversable&array[] $a
     */
    public function traversableIntersectionDifferentOrder(Traversable $a)
    {
    }

    public function traversableNull(?Traversable $a)
    {
    }

    /**
     * @param array<string>|array<int> $a
     */
    public function unionWithSameBase(array $a)
    {
    }

    /**
     * @param array<string>|array<int>|array<bool> $a
     */
    public function unionWithSameBaseAndMoreTypes(array $a)
    {
    }

    /**
     * @param array<int>|bool[] $a
     */
    public function unionWithSameBaseToo(array $a)
    {
    }

    /**
     * @param array<string>|array<int>|array<bool>|null $a
     */
    public function unionWithSameNullableBase(?array $a)
    {
    }
}
