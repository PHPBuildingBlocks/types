<?php

declare(strict_types=1);

namespace Unit;

use PHPBuildingBlocks\Types\Name\Name;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testValidName()
    {
        $name = new Name("Niko");
        $this->assertEquals("Niko",$name->value());
    }
}