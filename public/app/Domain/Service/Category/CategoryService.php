<?php

namespace App\Domain\Service\Category;

use App\Domain\Interface\Factory\BaseDtoFactoryInterface;
use App\Domain\Interface\Factory\Category\CategoryDtoFactoryInterface;
use App\Domain\Interface\Repository\BaseRepositoryInterface;
use App\Domain\Interface\Repository\Category\CategoryRepositoryInterface;
use App\Domain\Interface\Service\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    public function __construct(
        private CategoryRepositoryInterface $repository,
        private CategoryDtoFactoryInterface $categoryFactory
    )
    {
    }

    public function getRepository(): BaseRepositoryInterface
    {
        return $this->repository;
    }

    public function getFactory(): BaseDtoFactoryInterface
    {
        return $this->categoryFactory;
    }

    public function get()
    {
        return $this->repository->first();
    }

    public function getUsersList()
    {
        return $this->repository->get();
    }
}
