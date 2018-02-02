<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\
{ 
    ItemElement
};

interface ShoppingCartVisitor
{
    function visit(ItemElement $element) : float;
    
}

