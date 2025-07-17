<?php

namespace App\Domain\Interface\Service;

use App\Domain\Interface\Factory\BaseDtoFactoryInterface;
use App\Domain\Interface\Repository\BaseRepositoryInterface;

interface UserServiceInterface
{
    public function getRepository(): BaseRepositoryInterface;

    public function getFactory(): BaseDtoFactoryInterface;

}
