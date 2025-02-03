<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Email;


use PHPBuildingBlocks\Types\Common\Assertable;
use PHPBuildingBlocks\Types\Email\Exceptions\InvalidEmailException;

abstract readonly class AbstractEmail implements Assertable
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
}