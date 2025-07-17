<?php

namespace App\Domain\Factory\User;

use App\Common\ValueObject\User\RoleName;
use App\Domain\Dto\Entity\User\RoleDto;
use App\Domain\Factory\BaseDtoFactory;
use App\Domain\Interface\Factory\User\RoleDtoFactoryInterface;

class RoleDtoFactory extends BaseDtoFactory implements RoleDtoFactoryInterface
{
    public static function create(?int $id = null, ?string $name = null): RoleDto
    {
        return new RoleDto($id, new RoleName($name));
    }

    public static function remove(): void
    {

    }
}
