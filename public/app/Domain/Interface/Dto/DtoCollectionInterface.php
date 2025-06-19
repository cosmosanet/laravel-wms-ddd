<?php

namespace App\Domain\Interface\Dto;

use JsonSerializable;
use App\Domain\Dto\Entity\BaseAbstractDto;
interface DtoCollectionInterface extends JsonSerializable
{
    public function addEntity(BaseAbstractDto $entity): DtoCollectionInterface;

    public function addEntitiesArray(array $entities): DtoCollectionInterface;

    public function getValues(): array;
}
