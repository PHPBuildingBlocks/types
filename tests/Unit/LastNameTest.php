<?php

declare(strict_types=1);

namespace Unit;

use PHPBuildingBlocks\Types\LastName\Exceptions\InvalidLastNameException;
use PHPBuildingBlocks\Types\LastName\LastName;
use PHPUnit\Framework\TestCase;

class LastNameTest extends TestCase
{
    public function testValidLastName()
    {
        $lastName = new LastName("Doe");
        $this->assertEquals("Doe",$lastName->value());
    }
    public function testInValidLastName(): void
    {
        $this->expectException(InvalidLastNameException::class);
        $lastName = new LastName('1 1a');
        var_dump($lastName->value());
    }
}