<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Name;

use PHPBuildingBlocks\Types\Common\Assertable;

readonly abstract class AbstractName implements Assertable
{
  public function __construct(protected readonly string $name)
  {
      $this->assertValid();
  }

  public function value(): string
  {
        return $this->name;
  }


}