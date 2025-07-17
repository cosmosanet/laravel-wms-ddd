<?php

namespace App\Domain\Interface\Factory\User;

use App\Domain\Dto\Entity\BaseAbstractDto;
use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Factory\BaseDtoFactoryInterface;

interface UserDtoFactoryInterface extends BaseDtoFactoryInterface
{
  public static function create(int $id, string $name, string $email, string $password, ?BaseAbstractDto $role = null): BaseDtoInterface;
}
