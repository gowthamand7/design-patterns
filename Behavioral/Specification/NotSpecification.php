<?php

namespace DesignPatterns\Behavioral\Specification;

use DesignPatterns\Behavioral\Specification\SpecificationInterface;
use DesignPatterns\Behavioral\Specification\Item;
class NotSpecification implements SpecificationInterface
{
    private $_specification;

    function __construct(SpecificationInterface $specifications)
    {
        $this->_specification = $specifications;
    }

    function isSatisfiedBy(Item $item): bool
    {
        return (!$this->_specification->isSatisfiedBy($item));
    }

}