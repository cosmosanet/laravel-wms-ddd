<?php

namespace App\Domain\Repository\Elequent;

use App\Domain\Interface\Dto\BaseDtoInterface;

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
        return $this->createUserDto($user);
    }

    public function firstByFilter(array $filter): BaseDtoInterface
    {
        $user = $this->model::where($filter)->first();

        return $this->createUserDto($user);
    }

    public function get(): array
    {
        $values = $this->model::get();
        $dto = [];
        foreach ($values as $value) {
            $dto[] = $this->createDto($value);
        }

        return $dto;
    }

    public function getById($id): BaseDtoInterface
    {
        $user = $this->model::where('id', $id)->get();

        return $this->createDto($user);
    }

    abstract protected function getByFilter(array $select, array $filter, array $order, $offset, ?int $limit = 100): array
    {

    }

    abstract protected function createDto($model): BaseDtoInterface;
}
