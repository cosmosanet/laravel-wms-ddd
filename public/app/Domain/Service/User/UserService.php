<?php

namespace App\Domain\Service\User;

use App\Domain\Interface\Factory\User\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use App\Domain\Interface\Service\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $repository,
        private UserDtoFactoryInterface $userDtoFactory
    ) {}

    public function getRepository(): UserRepositoryInterface
    {
        return $this->repository;
    }
    public function getFactory(): UserDtoFactoryInterface
    {
        return $this->userDtoFactory;
    }

    public function get()
    {
        return $this->repository->first();
    }

    public function getUsersList()
    {
        return $this->repository->get();
    }
}
