<?php

namespace Unit;

use PHPBuildingBlocks\Types\Id\Exceptions\InvalidIdException;
use PHPBuildingBlocks\Types\Id\IntId;
use PHPUnit\Framework\TestCase;

class IntIdTest extends TestCase
{
    public function testValidIntId()
    {
        $validId = 123;
        $intId = new IntId($validId);

        $this->assertEquals($validId, $intId->value(), "The value method should return the initial integer ID.");
    }

    public function testInvalidIntIdThrowsException()
    {
        $this->expectException(InvalidIdException::class);

        $invalidId = 'abc'; // or any non-integer value
        new IntId($invalidId);
    }
}
