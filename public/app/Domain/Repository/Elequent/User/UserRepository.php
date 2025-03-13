<?php

namespace App\Domain\Repository\Elequent\User;

use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Dto\DtoFactory\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use App\Domain\Model\User\User;
use App\Domain\Repository\Elequent\BaseAbstractRepository;

class UserRepository extends BaseAbstractRepository implements UserRepositoryInterface
{


    public function __construct(
        protected User $model,
        protected UserDtoFactoryInterface $dtoFactory,
    ) {}

    public function create(UserDto $Dto): void
    {
        $this->model::create([
           'name' => $Dto->name,
           'email' => $Dto->email,
           'password' => $Dto->password,
           'id_role' => $Dto->roleId
       ]);
    }

    public function updateByFilter(UserDto $Dto, array $filter): void
    {
        $this->model::where([
            'name' => $Dto->name,
            'email' => $Dto->email,
            'password' => $Dto->password,
            'id_role' => $Dto->roleId
        ])->update($filter);
    }

    public function update(UserDto $Dto, int $id): void
    {
        $this->model::where([
            'name' => $Dto->name,
            'email' => $Dto->email,
            'password' => $Dto->password,
            'id_role' => $Dto->roleId
        ])->update(['id' => $id]);
    }

    protected function createDto($model): BaseDtoInterface
    {
        $role = null;
//            $this->roleRepository->getById($user->getRoleId());
        return $this->dtoFactory->create(
            $model->name,
            $model->email,
            $model->password,
            $model,
        );
    }
}
