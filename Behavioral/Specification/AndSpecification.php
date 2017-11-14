<?php
namespace DesignPatterns\Behavioral\Specification;

use DesignPatterns\Behavioral\Specification\SpecificationInterface;
use DesignPatterns\Behavioral\Specification\Item;
class AndSpecification implements SpecificationInterface
{
    private $_specifications;

    function __construct(SpecificationInterface ...$specifications)
    {
        $this->_specifications = $specifications;
    }

    function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->_specifications as $specification)
        {
            if (!$specification->isSatisfiedBy($item))
            {
                return false;
            }
        }
        return true;
    }

}