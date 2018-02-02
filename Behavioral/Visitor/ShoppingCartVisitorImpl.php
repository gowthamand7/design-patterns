<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\
{
    ShoppingCartVisitor,
    Book,
    ItemElement,
    Fruit
};

class ShoppingCartVisitorImpl implements ShoppingCartVisitor
{

    function visit(ItemElement $element) : float
    {
        if ($element instanceof Book)
        {
            return $this->getBookCost($element);
        }
        if ($element instanceof Fruit)
        {
            return $this->getFruitCost($element);
        }
    }

    function getBookCost($book) : float
    {
        println($book->isbnNumber . " : " . $book->price);
        return $book->price;
    }

    function getFruitCost($fruit) : float
    {
        println($fruit->name . " : " . $fruit->weight . " : " . $fruit->weight * $fruit->price);
        return $fruit->weight * $fruit->price;
    }

}