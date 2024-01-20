<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Id;

use PHPBuildingBlocks\Types\Id\Exceptions\InvalidIdException;

readonly class UuidId extends AbstractId
{
    /**
     * Validates if the provided ID is a valid UUID.
     *
     * @return void
     *
     * @throws InvalidIdException
     */
    protected function assertValid(): void
    {
        if (!preg_match('/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/', (string)$this->id)) {
            throw new InvalidIdException('Id is not a valid UUID');
        }
    }
}
