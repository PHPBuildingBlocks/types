<?php

declare(strict_types=1);

namespace PHPBuildingBlocks\Types\Common;

use InvalidArgumentException;

interface Assertable
{
    /**
     * @throws InvalidArgumentException
     * @return void
     */
   public function assertValid():void;

}