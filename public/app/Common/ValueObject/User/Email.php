<?php

namespace App\Common\ValueObject\User;

use App\Common\ValueObject\AbstractValueObject;

final class Email extends AbstractValueObject
{
    public protected(set) string $id = 'user_email';

    public protected(set) string $type = 'email';

    public function __construct(?string $email = null)
    {
        $this->value = $email;
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
