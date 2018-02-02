<?php

use DesignPatterns\Behavioral\Visitor\
{
    Book,
    Fruit,
    ShoppingCartVisitorImpl
};

require_once '../../autoload.php';

$element = [];

$element[] = new Book(150, 'D P');
$element[] = new Book(300, 'DS');
$element[] = new Book(80, 'DS&A');

$element[] = new Fruit('Apple', 120, 15.5);
$element[] = new Fruit('Banana', 90, 8);
$element[] = new Fruit('Banana', 90, 8);


$shoppingCartVisitor = new ShoppingCartVisitorImpl();

$sum = 0;

foreach ($element as $key => $value)
{
    $sum += $shoppingCartVisitor->visit($value);
}

println('Total cost :' . $sum);

