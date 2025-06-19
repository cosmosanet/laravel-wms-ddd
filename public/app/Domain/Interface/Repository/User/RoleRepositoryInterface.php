<?php

namespace App\Domain\Interface\Repository\User;

use App\Domain\DTO\Entity\User\UserDto;
use App\Domain\Interface\Repository\BaseRepositoryInterface;

interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    public function create(UserDto $Dto): void;

    public function updateByFilter(UserDto $Dto, array $filter): void;

    public function updateById(UserDto $Dto, int $id): void;
}
