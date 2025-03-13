<?php

namespace App\Domain\Interface\Repository;

use App\Domain\Interface\Dto\BaseDtoInterface;

interface BaseRepositoryInterface
{
    public function get(): array;

    public function getById(int $id): BaseDtoInterface;

    public function getByFilter(array $select, array $filter, array $order, $offset, ?int $limit): array;

    public function first(): BaseDtoInterface;

    public function firstByFilter(array $filter): BaseDtoInterface;

    public function delete(int $id): void;

    public function deleteByFilter(array $filter): void;
}
