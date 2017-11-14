<?php

namespace DesignPatterns\Behavioral\Specification;

class Item
{
    private $_price;

    public function __construct(float $price)
    {
        $this->_price = $price;
    }

    public function getPrice(): float
    {
        return $this->_price;
    }

}