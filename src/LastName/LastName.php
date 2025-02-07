<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\LastName;

use PHPBuildingBlocks\Types\LastName\AbstractLastName;
use PHPBuildingBlocks\Types\LastName\Exceptions\InvalidLastNameException;
use PHPBuildingBlocks\Types\Name\InvalidNameException;

class LastName extends AbstractLastName
{

    /**
     * @inheritDoc
     */
    public function assertValid(): void
    {
        if( !ctype_alpha($this->lastName) ){
            throw new InvalidLastNameException('Lastname is not valid');
        }
    }
}