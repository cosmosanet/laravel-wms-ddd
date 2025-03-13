<?php

namespace App\Domain\Dto\DtoFactory\User;

use App\Common\ValueObject\User\Name;
use App\Common\ValueObject\User\RoleName;
use App\Domain\Dto\Entity\User\RoleDto;
use App\Domain\Interface\Dto\DtoFactory\RoleDtoFactoryInterface;

class RoleDtoFactory implements RoleDtoFactoryInterface
{
  public static function create(?string $name = null): RoleDto
  {
      return new RoleDto(new RoleName($name));
  }
}
