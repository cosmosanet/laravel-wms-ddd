<?php

namespace App\Domain\Interface\Dto\DtoFactory;

use App\Domain\Interface\Dto\BaseDtoInterface;

interface RoleDtoFactoryInterface
{
  public static function create(string $name): BaseDtoInterface;
}
