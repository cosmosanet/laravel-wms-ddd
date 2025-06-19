<?php

namespace App\Domain\Dto\Entity;

use App\Domain\Interface\Dto\DtoCollectionInterface;

class DtoCollection implements DtoCollectionInterface
{
    public function __construct(
        public private(set) ?array $entities = [],
    ) {}

    public function addEntity(BaseAbstractDto $entity): DtoCollectionInterface
    {
        $this->entities = array_merge($this->entities, [$entity]);

        return $this;
    }

    public function addEntitiesArray(array $entities): DtoCollectionInterface
    {
        $this->entities = array_merge($this->entities, $entities);

        return $this;
    }

    public function jsonSerialize(): array
    {
        return $this->entities;
    }

    public function getValues(): array
    {
        return array_values($this->entities);
    }
}
