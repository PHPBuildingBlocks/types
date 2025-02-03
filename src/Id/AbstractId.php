<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Id;

use InvalidArgumentException;
use PHPBuildingBlocks\Types\Common\Assertable;

readonly abstract class AbstractId implements Assertable
{
    /**
     * @param  int|string  $id
     */
    public function __construct(protected int|string $id)
    {
        $this->assertValid();
    }

    public function value(): int|string
    {
        return $this->id;
    }
}