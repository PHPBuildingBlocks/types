<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\LastName;

use PHPBuildingBlocks\Types\Common\Assertable;

abstract class AbstractLastName implements Assertable
{
    public function __construct(protected readonly string $lastName)
    {

    }

    public function value(): string {
        return $this->lastName;
    }
}