<?php

namespace App\Domain\Service\User;

use App\Domain\Interface\Dto\DtoFactory\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use App\Domain\Interface\Service\BaseServiceInterface;

class UserService implements BaseServiceInterface
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
        //  $dto = $this->userDtoFactory->create('qwe', 'qwe@qwe.com', 'qwe');
        $dto = $this->userDtoFactory->create();
        $dto->setName('qwe');
        $dto->setEmail('qwe@qwe.com');
        $dto->setPassword('qwe');
        $dto->setRoleId();
//        $this->repository->create($dto);

        return $this->repository->first()->toArray();
    }
}
