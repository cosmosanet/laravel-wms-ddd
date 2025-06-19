<?php

namespace app\Domain\Interface\Factory\User;

use App\Domain\Interface\Dto\BaseDtoInterface;

interface RoleDtoFactoryInterface
{
  public static function create(?int $id, ?string $name): BaseDtoInterface;
}
