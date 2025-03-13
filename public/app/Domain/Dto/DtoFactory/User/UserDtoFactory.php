<?php

namespace App\Domain\Dto\DtoFactory\User;

use App\Common\ValueObject\User\Email;
use App\Common\ValueObject\User\Name;
use App\Common\ValueObject\User\Password;
use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Interface\Dto\DtoFactory\UserDtoFactoryInterface;

class UserDtoFactory implements UserDtoFactoryInterface
{
  public static function create(?string $name = null, ?string $email = null, ?string $password = null, ?int $idRole = null): UserDto
  {
      return new UserDto(new Name($name), new Email($email), new Password($password), $idRole);
  }
}
