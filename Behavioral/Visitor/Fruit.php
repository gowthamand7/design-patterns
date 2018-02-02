<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\
{
    ShoppingCartVisitor,
    ItemElement
};

class Fruit implements ItemElement
{
    private $price;
    private $weight;
    private $name;

    function __construct(string $name, float $price, float $weight)
    {
        $this->price = $price;
        $this->name = $name;
        $this->weight = $weight;
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