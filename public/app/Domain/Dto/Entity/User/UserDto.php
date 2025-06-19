<?php

namespace App\Domain\Dto\Entity\User;

use App\Common\ValueObject\User\Email;
use App\Common\ValueObject\User\Name;
use App\Common\ValueObject\User\Password;
use App\Domain\Dto\Entity\BaseAbstractDto;

class UserDto extends BaseAbstractDto
{
    public function __construct(
        public private(set) int $id,
        public private(set) Name $name,
        public private(set) Email $email,
        public private(set) Password $password,
        public private(set) ?BaseAbstractDto $role = null
    ) {}

    public function setName(string $name): UserDto
    {
        $this->name->set($name);

        return $this;
    }

    public function setEmail(string $email): UserDto
    {
        $this->email->set($email);

        return $this;
    }

    public function setPassword(string $password): UserDto
    {
        $this->password->set($password);

        return $this;
    }
}
