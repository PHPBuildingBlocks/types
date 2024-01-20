<?php

declare(strict_types=1);

namespace Unit;

use PHPBuildingBlocks\Types\Email\Email;
use PHPBuildingBlocks\Types\Email\Exceptions\InvalidEmailException;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testValidEmail(): void
    {
        $email = new Email('john@example.com');
        $this->assertEquals('john@example.com', $email->value());
    }

    public function testInValidEmail(): void
    {
        $this->expectException(InvalidEmailException::class);
        $email = new Email('johnexample.com');
    }
}