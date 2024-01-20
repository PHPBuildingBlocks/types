<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Id;

use InvalidArgumentException;

readonly abstract class AbstractId
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

    /**
     * @return void
     *
     * @throws InvalidArgumentException
     */
    abstract protected function assertValid(): void;
}