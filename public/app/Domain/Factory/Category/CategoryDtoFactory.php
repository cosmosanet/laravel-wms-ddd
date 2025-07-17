<?php

namespace App\Domain\Factory\Category;

use App\Common\ValueObject\Category\Deception;
use App\Common\ValueObject\Category\Name;
use App\Domain\Dto\Entity\Category\CategoryDto;
use App\Domain\Factory\BaseDtoFactory;
use App\Domain\Interface\Factory\Category\CategoryDtoFactoryInterface;

class CategoryDtoFactory extends BaseDtoFactory implements CategoryDtoFactoryInterface
{
    public static function create(?int $id = null, ?string $name = null, ?string $deception = null): CategoryDto
    {
        return new CategoryDto($id, new Name($name), new Deception($deception));
    }

    public static function remove(): void
    {

    }
}
