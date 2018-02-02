<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\
{
    ShoppingCartVisitor,
    ItemElement
};

class Book implements ItemElement
{
    private $price;
    private $isbnNumber;

    function __construct(float $price, string $isbnNumber)
    {
        $this->price = $price;
        $this->isbnNumber = $isbnNumber;
    }

    function __get($name)
    {
        return (isset($this->$name) ? $this->$name : false);
    }

    function accept(ShoppingCartVisitor $visitor) : float
    {
        return $visitor->vist($this);
    }

}