<?php

namespace Unit;

use PHPBuildingBlocks\Types\Id\Exceptions\InvalidIdException;
use PHPBuildingBlocks\Types\Id\UuidId;
use PHPUnit\Framework\TestCase;

class UuidIdTest extends TestCase
{
    public function testValidUuidId()
    {
        $validUuid = '123e4567-e89b-12d3-a456-426655440000';
        $uuidId = new UuidId($validUuid);

        $this->assertEquals($validUuid, $uuidId->value(), "The value method should return the initial UUID.");
    }

    public function testInvalidUuidIdThrowsException()
    {
        $this->expectException(InvalidIdException::class);

        $invalidUuid = 'invalid-uuid';
        new UuidId($invalidUuid);
    }

    // Optional: Test for various valid UUID formats
    public static function validUuidProvider(): array
    {
        return [
            ['123e4567-e89b-12d3-a456-426655440000'],
        ];
    }

    /**
     * @dataProvider validUuidProvider
     */
    public function testVariousValidUuids($validUuid)
    {
        $uuidId = new UuidId($validUuid);

        $this->assertEquals($validUuid, $uuidId->value());
    }
}
