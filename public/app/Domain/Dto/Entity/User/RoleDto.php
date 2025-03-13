<?php

namespace App\Domain\Dto\Entity\User;

use App\Common\ValueObject\User\RoleName;
use App\Domain\Dto\Entity\BaseAbstractDto;

class RoleDto extends BaseAbstractDto
{
    public function __construct(
        public private(set) RoleName $name,
    ) {}

    public function setName(string $name): RoleDto
    {
        $this->name->set($name);

        return $this;
    }
}
