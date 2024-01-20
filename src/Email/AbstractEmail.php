<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Email;


use PHPBuildingBlocks\Types\Email\Exceptions\InvalidEmailException;

abstract readonly class AbstractEmail
{
    public function __construct(protected string $email)
    {
        $this->assertValid();
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->email;
    }

    /**
     * @return void
     * @throws InvalidEmailException
     */
    abstract public function assertValid(): void;
}