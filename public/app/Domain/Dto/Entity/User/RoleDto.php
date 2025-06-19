<?php

namespace App\Domain\Dto\Entity\User;

use App\Common\ValueObject\User\RoleName;
use App\Domain\Dto\Entity\BaseAbstractDto;

class RoleDto extends BaseAbstractDto
{
    public function __construct(
        public private(set) ?int $id,
        public private(set) ?RoleName $roleName,
    ) {}

    public function setName(string $name): RoleDto
    {
        $this->name->set($name);

        return $this;
    }
}
