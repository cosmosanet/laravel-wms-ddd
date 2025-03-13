<?php

namespace App\Domain\Interface\Repository\User;

use App\Domain\DTO\Entity\User\UserDto;
use App\Domain\Interface\Repository\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function create(UserDto $Dto);

    public function updateByFilter(UserDto $Dto, array $filter);

    public function update(UserDto $Dto, int $id);
}
