<?php

namespace App\Domain\Repository\Elequent\User;

use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Factory\User\RoleDtoFactoryInterface;
use App\Domain\Interface\Factory\User\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use App\Domain\Model\User\User;
use App\Domain\Repository\Elequent\BaseAbstractRepository;

class UserRepository extends BaseAbstractRepository implements UserRepositoryInterface
{


    public function __construct(
        protected User $model,
        protected UserDtoFactoryInterface $dtoFactory,
        protected RoleDtoFactoryInterface $RoleDtoFactory,
    ) {}

    public function create(UserDto $Dto): void
    {
        $this->model::create([
           'name' => $Dto->name,
           'email' => $Dto->email,
           'password' => $Dto->password,
           'id_role' => $Dto->role->id,
       ]);
    }

    public function updateByFilter(UserDto $Dto, array $filter): void
    {
        $this->model::where([
            'name' => $Dto->name,
            'email' => $Dto->email,
            'password' => $Dto->password,
            'id_role' => $Dto->role->id,
        ])->update($filter);
    }

    public function updateById(UserDto $Dto, int $id): void
    {
        $this->model::where([
            'id' => $id
        ])->update([
            'name' => $Dto->name,
            'email' => $Dto->email,
            'password' => $Dto->password,
            'id_role' => $Dto->role->id,
        ]);
    }

    protected function createDto($model): BaseDtoInterface
    {
        return $this->dtoFactory->create(
            $model->id,
            $model->name,
            $model->email,
            $model->password,
            $this->RoleDtoFactory->create(
                $model->role?->id,
                $model->role?->name
            ),
        );
    }
}
