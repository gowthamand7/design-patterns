<?php

namespace DesignPatterns\Behavioral\Specification;

use DesignPatterns\Behavioral\Specification\Item;
use DesignPatterns\Behavioral\Specification\SpecificationInterface;
class PriceSpecification implements SpecificationInterface
{
    /**
     * @var float|null
     */
    private $maxPrice;

    /**
     * @var float|null
     */
    private $minPrice;

    /**
     * @param float $minPrice
     * @param float $maxPrice
     */
    public function __construct(float $minPrice, float $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice)
        {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice)
        {
            return false;
        }

        return true;
    }

}