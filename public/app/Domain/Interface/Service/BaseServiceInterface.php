<?php

namespace App\Domain\Interface\Service;

use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Interface\Dto\DtoFactory\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;

interface BaseServiceInterface
{
    public function getRepository(): UserRepositoryInterface;

    public function getFactory(): UserDtoFactoryInterface;
}
