<?php

namespace App\Domain\Interface\Repository;

use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Dto\DtoCollectionInterface;

interface BaseRepositoryInterface
{
    public function get(): DtoCollectionInterface;

    public function getById(int $id): BaseDtoInterface;

    public function getByFilter(array $select, array $filter, array $order, $offset, ?int $limit): DtoCollectionInterface;

    public function first(): BaseDtoInterface;

    public function firstByFilter(array $filter): BaseDtoInterface;

    public function delete(int $id): void;

    public function deleteByFilter(array $filter): void;
}
