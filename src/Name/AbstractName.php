<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Name;

readonly abstract class AbstractName
{
  public function __construct(protected readonly string $name)
  {
  }

  public function value(): string
  {
        return $this->name;
  }


}