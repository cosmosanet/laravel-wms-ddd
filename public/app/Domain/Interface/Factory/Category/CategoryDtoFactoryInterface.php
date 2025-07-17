<?php

namespace App\Domain\Interface\Factory\Category;

use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Factory\BaseDtoFactoryInterface;

interface CategoryDtoFactoryInterface extends BaseDtoFactoryInterface
{
    public static function create(?int $id, ?string $name, ?string $deception): BaseDtoInterface;
}
