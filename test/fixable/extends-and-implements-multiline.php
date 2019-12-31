<?php

declare(strict_types=1);

namespace Vendor\Package;

use ArrayAccess;
use BarClass as Bar;
use Countable;
use OtherVendor\OtherPackage\BazClass;
use ParentClass;
use Serializable;

class ClassName extends ParentClass implements
    \ArrayAccess,
    \Countable,
    \Serializable
{
    // constants, properties, methods
}
