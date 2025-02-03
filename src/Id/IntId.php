<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Id;

use PHPBuildingBlocks\Types\Id\Exceptions\InvalidIdException;

readonly class IntId extends AbstractId
{

     /**
     * @inheritDoc
     */
    public function assertValid(): void
    {
        if(!is_int($this->id)){
            throw new InvalidIdException('Id is not an integer');
        }
    }
}