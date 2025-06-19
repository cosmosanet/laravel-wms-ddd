<?php

namespace App\Common\ValueObject\User;

use App\Common\ValueObject\AbstractValueObject;

final class Password extends AbstractValueObject
{
    public protected(set) string $id = 'user_password';

    public protected(set) string $type = 'string';

    public function __construct(?string $password = null)
    {
        $this->value = $password;
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
