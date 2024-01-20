<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Email;

use PHPBuildingBlocks\Types\Email\Exceptions\InvalidEmailException;

readonly class Email extends AbstractEmail
{

    /**
     * @inheritDoc
     */
    public function assertValid(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException('Email is not valid');
        }
    }
}