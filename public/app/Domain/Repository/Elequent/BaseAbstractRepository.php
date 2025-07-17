<?php

namespace App\Domain\Repository\Elequent;

use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Dto\DtoCollectionInterface;

abstract class BaseAbstractRepository
{
    public function deleteByFilter(array $filter): void
    {
        $this->model::where($filter)->delete();
    }

    public function delete($id): void
    {
        $this->model::where('id', $id)->delete();
    }

    public function first(): BaseDtoInterface
    {
        $user = $this->model::first();
        return $this->createDto($user);
    }

    public function firstByFilter(array $filter): BaseDtoInterface
    {
        $user = $this->model::where($filter)->first();

        return $this->createDto($user);
    }

    public function getByFilter(array $select, array $filter, array $order, $offset, ?int $limit = 100): DtoCollectionInterface
    {
        $users = $this->model::where($filter)->orderBy(...$order)->limit($limit)->get(...$select);
        $dto = $this->dtoFactory->createDtoCollection();
        foreach ($users as $user) {
            $dto->addEntity($this->dtoFactory->create(
                $user->name,
            ));
        }

        return $dto;
    }

    public function get(): DtoCollectionInterface
    {
        $values = $this->model::get();
        $dto = $this->dtoFactory->createDtoCollection();
        foreach ($values as $value) {
            $dto->addEntity($this->createDto($value));
        }
        return $dto;
    }

    public function getById($id): BaseDtoInterface
    {
        $user = $this->model::where('id', $id)->first();
        return $this->createDto($user);
    }

    abstract protected function createDto($model): BaseDtoInterface;
}
