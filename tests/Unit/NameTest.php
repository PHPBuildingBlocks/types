<?php

declare(strict_types=1);

namespace Unit;

use PHPBuildingBlocks\Types\Email\Email;
use PHPBuildingBlocks\Types\Email\Exceptions\InvalidEmailException;
use PHPBuildingBlocks\Types\Name\InvalidNameException;
use PHPBuildingBlocks\Types\Name\Name;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testValidName()
    {
        $name = new Name("Niko");
        $this->assertEquals("Niko",$name->value());
    }
    public function testInValidName(): void
    {
        $this->expectException(InvalidNameException::class);
        $name = new Name('1 1a');
    }
}