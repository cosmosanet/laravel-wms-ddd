<?php

namespace App\Domain\Dto\Entity;

use App\Domain\Interface\Dto\BaseDtoInterface;
use ReflectionClass;

abstract class BaseAbstractDto implements BaseDtoInterface
{
    public function jsonSerialize(): array
    {
        $array = [];
        $reflectionClass = new ReflectionClass($this);
        foreach ($reflectionClass->getProperties() as $reflectionProperty) {
            $array[$reflectionProperty->getName()] = $reflectionProperty->getValue($this);
        }
        return $array;
    }

    public function toArray(): array
    {
        return json_decode(json_encode($this->jsonSerialize()), true);
    }

}
