<?php

namespace App\Domain\Dto\Entity\Category;

use App\Common\ValueObject\Category\Deception;
use App\Common\ValueObject\Category\Name;
use App\Domain\Dto\Entity\BaseAbstractDto;

class CategoryDto extends BaseAbstractDto
{
    public function __construct(
        public private(set) ?int $id,
        public private(set) ?Name $name,
        public private(set) ?Deception $deception,
    ) {}

    public function setName(string $name): CategoryDto
    {
        $this->name->set($name);

        return $this;
    }

    public function setDeception(string $deception): CategoryDto
    {
        $this->deception->set($deception);

        return $this;
    }
}
