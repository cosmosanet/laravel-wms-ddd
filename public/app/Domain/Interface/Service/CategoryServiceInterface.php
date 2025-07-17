<?php

namespace App\Domain\Interface\Service;

use App\Domain\Interface\Factory\BaseDtoFactoryInterface;
use App\Domain\Interface\Repository\BaseRepositoryInterface;

interface CategoryServiceInterface
{
    public function getRepository(): BaseRepositoryInterface;

    public function getFactory(): BaseDtoFactoryInterface;

}
