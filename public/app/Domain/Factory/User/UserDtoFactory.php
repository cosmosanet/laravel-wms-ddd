<?php

namespace App\Domain\Factory\User;

use App\Common\ValueObject\User\Email;
use App\Common\ValueObject\User\Name;
use App\Common\ValueObject\User\Password;
use App\Domain\Dto\Entity\BaseAbstractDto;
use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Factory\BaseDtoFactory;
use App\Domain\Interface\Factory\User\UserDtoFactoryInterface;

class UserDtoFactory extends BaseDtoFactory implements UserDtoFactoryInterface
{
    public static function create(int $id, ?string $name = null, ?string $email = null, ?string $password = null, ?BaseAbstractDto $role = null): UserDto
    {
        return new UserDto($id, new Name($name), new Email($email), new Password($password), $role);
    }

    public static function remove(): void
    {

    }
}
