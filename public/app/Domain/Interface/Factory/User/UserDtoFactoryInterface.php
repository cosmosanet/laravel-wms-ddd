<?php

namespace app\Domain\Interface\Factory\User;

use App\Domain\Dto\Entity\BaseAbstractDto;
use App\Domain\Interface\Dto\BaseDtoInterface;

interface UserDtoFactoryInterface
{
  public static function create(int $id, string $name, string $email, string $password, ?BaseAbstractDto $role = null): BaseDtoInterface;
}
