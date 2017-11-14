<?php

namespace DesignPatterns\Behavioral\Specification;

use DesignPatterns\Behavioral\Specification\Item;
interface SpecificationInterface
{

    public function isSatisfiedBy(Item $item): bool;
}