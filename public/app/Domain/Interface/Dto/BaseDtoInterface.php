<?php

namespace App\Domain\Interface\Dto;

use JsonSerializable;

interface BaseDtoInterface extends JsonSerializable
{
    public function jsonSerialize(): array;
}
