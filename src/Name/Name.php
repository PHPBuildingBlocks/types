<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Name;

readonly class Name extends AbstractName
{
    public function assertValid(): void
    {
        if( !ctype_alpha($this->name) ){
            throw new InvalidNameException('Name is not valid');
        }
    }
}