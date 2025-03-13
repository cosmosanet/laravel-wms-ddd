<?php

namespace App\Domain\Repository\Elequent\User;

use App\Domain\Dto\Entity\User\UserDto;
use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Dto\DtoFactory\RoleDtoFactoryInterface;
use App\Domain\Interface\Dto\DtoFactory\UserDtoFactoryInterface;
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

    public function update(UserDto $Dto, int $id): void
    {
        $this->model::where([
            'name' => $Dto->name,
        ])->update(['id' => $id]);
    }
    public function first(): BaseDtoInterface
    {
        $user = $this->model::first();
        return $this->dtoFactory->create(
            $user->name,
        );
    }

    public function firstByFilter(array $filter): BaseDtoInterface
    {
        $user = $this->model::where($filter)->first();
        return $this->dtoFactory->create(
            $user->name,
        );
    }

    public function get(): array
    {
        $users = $this->model::get();
        $dto = [];
        foreach ($users as $user) {
            $dto[] = $this->dtoFactory->create(
                $user->name,
            );
        }

        return $dto;
    }

    public function getById($id): BaseDtoInterface
    {
        $users = $this->model::where('id', $id)->get();
        $dto = [];
        foreach ($users as $user) {
            $dto[] = $this->dtoFactory->create(
                $user->name,
            );
        }

        return $dto;
    }

    public function getByFilter(array $select, array $filter, array $order, $offset, ?int $limit = 100): array
    {
        $users = $this->model::where($filter)->orderBy(...$order)->limit($limit)->get($select);
        $dto = [];
        foreach ($users as $user) {
            $dto[] = $this->dtoFactory->create(
                $user->name,
            );
        }

        return $dto;
    }

    private function createRoleDto($role): BaseDtoInterface
    {
        $role = null;
//            $this->roleRepository->getById($user->getRoleId());
        return $this->dtoFactory->create(
            $role->name,
        );
    }
}
