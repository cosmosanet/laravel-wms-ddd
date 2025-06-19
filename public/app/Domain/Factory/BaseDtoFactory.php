<?php

namespace App\Domain\Factory;

use App\Domain\Interface\Dto\BaseDtoInterface;
use App\Domain\Interface\Dto\DtoCollectionInterface;

class BaseDtoFactory
{
    public function __construct(
        protected DtoCollectionInterface $collection,
    ) {}

    public function createDtoCollection(): DtoCollectionInterface
    {
       return $this->collection;
    }
}
