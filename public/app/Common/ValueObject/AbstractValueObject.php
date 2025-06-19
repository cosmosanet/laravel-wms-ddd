<?php

namespace App\Common\ValueObject;

use JsonSerializable;

abstract class AbstractValueObject implements JsonSerializable
{
    protected string $id;

    protected string $type;

    protected mixed $value;

    public function equals(AbstractValueObject $object): bool
    {
        return $this->jsonSerialize() === $object->jsonSerialize();

    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function set($value): void
    {
        $this->value = $value;
    }

    public function get(): string
    {
        return $this->value;
    }
}
