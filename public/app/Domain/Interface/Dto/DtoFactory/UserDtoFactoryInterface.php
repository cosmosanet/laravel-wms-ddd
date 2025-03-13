<?php

namespace App\Domain\Interface\Dto\DtoFactory;

use App\Domain\Dto\Entity\User\RoleDto;
use App\Domain\Interface\Dto\BaseDtoInterface;

interface UserDtoFactoryInterface
{
  public static function create(string $name, string $email, string $password, ?int $idRole = null): BaseDtoInterface;
}
