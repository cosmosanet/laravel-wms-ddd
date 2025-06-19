<?php

namespace App\Domain\Repository\Elequent\User;

use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Factory\User\RoleDtoFactoryInterface;
use App\Domain\Interface\Repository\User\RoleRepositoryInterface;
use App\Domain\Model\User\Role;
use App\Domain\Repository\Elequent\BaseAbstractRepository;

class RoleRepository extends BaseAbstractRepository implements RoleRepositoryInterface
{
    public function __construct(
        protected Role $model,
        protected RoleDtoFactoryInterface $dtoFactory
    ) {}

    public function create(UserDto $Dto): void
    {
       $this->model::create([
           'name' => $Dto->name,
       ]);
    }

    public function updateByFilter(UserDto $Dto, array $filter): void
    {
        $this->model::where([
            'name' => $Dto->name,
        ])->update($filter);
    }

    public function updateById(UserDto $Dto, int $id): void
    {
        $this->model::where([
            'id' => $id
        ])->update([
            'name' => $Dto->name,
        ]);
    }

    protected function createDto($model): BaseDtoInterface
    {
        return $this->dtoFactory->create(
            $model->id,
            $model->name,
        );
    }
}
