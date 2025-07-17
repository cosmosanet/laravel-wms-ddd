<?php

namespace app\Domain\Interface\Factory\User;

use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Factory\BaseDtoFactoryInterface;

interface RoleDtoFactoryInterface extends BaseDtoFactoryInterface
{
  public static function create(?int $id, ?string $name): BaseDtoInterface;
}
