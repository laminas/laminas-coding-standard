<?php

declare(strict_types = 1);

namespace Vendor\Package;

use BarClass as Bar;
use FooClass;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends BazClass implements \ArrayAccess, \Countable
{
    public function __construct(FooClass $foo, Bar $bar)
    {
        // ...
    }
}
