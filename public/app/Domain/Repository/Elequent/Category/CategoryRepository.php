<?php

namespace App\Domain\Repository\Elequent\Category;

use App\Domain\Dto\Entity\Category\CategoryDto;
use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Factory\Category\CategoryDtoFactoryInterface;
use App\Domain\Interface\Repository\Category\CategoryRepositoryInterface;
use App\Domain\Model\Category\Category;
use App\Domain\Repository\Elequent\BaseAbstractRepository;

class CategoryRepository extends BaseAbstractRepository implements CategoryRepositoryInterface
{
    public function __construct(
        protected Category $model,
        protected CategoryDtoFactoryInterface $dtoFactory,
    ) {}

    public function create(CategoryDto $Dto): void
    {
       $this->model::create([
           'name' => $Dto->name,
           'deception' => $Dto->deception,
       ]);
    }

    public function updateByFilter(CategoryDto $Dto, array $filter): void
    {
        $this->model::where([
            'name' => $Dto->name,
            'deception' => $Dto->deception,
        ])->update($filter);
    }

    public function updateById(CategoryDto $Dto, int $id): void
    {
        $this->model::where([
            'id' => $id
        ])->update([
            'name' => $Dto->name,
            'deception' => $Dto->deception,
        ]);
    }

    protected function createDto($model): BaseDtoInterface
    {
        return $this->dtoFactory->create(
            $model->id,
            $model->name,
            $model->deception,
        );
    }
}
