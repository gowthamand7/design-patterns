<?php

namespace DesignPatterns\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\ShoppingCartVisitor;

interface ItemElement
{

    public function accept(ShoppingCartVisitor $visitor): float;
}