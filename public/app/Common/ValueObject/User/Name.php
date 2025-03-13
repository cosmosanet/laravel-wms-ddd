<?php

namespace App\Common\ValueObject\User;

use App\Common\ValueObject\AbstractValueObject;

final class Name extends AbstractValueObject
{
    public protected(set) string $id = 'user_name';

    public protected(set) string $type = 'string';

    public function __construct(?string $name = null)
    {
        $this->value = $name;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): mixed
    {
        return $this->value;
    }
}
