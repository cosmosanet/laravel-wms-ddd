<?php

namespace App\Domain\Interface\Repository\Category;

use App\Domain\Dto\Entity\Category\CategoryDto;
use App\Domain\Interface\Repository\BaseRepositoryInterface;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function create(CategoryDto $Dto): void;

    public function updateByFilter(CategoryDto $Dto, array $filter): void;

    public function updateById(CategoryDto $Dto, int $id): void;
}
