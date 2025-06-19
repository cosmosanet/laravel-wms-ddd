<?php

namespace App\Domain\Interface\Service;

use App\Domain\Interface\Factory\User\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;

interface BaseServiceInterface
{
    public function getRepository(): UserRepositoryInterface;

    public function getFactory(): UserDtoFactoryInterface;

}
