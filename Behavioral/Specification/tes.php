<?php

namespace DesignPatterns\Behavioral\Specification;

use DesignPatterns\Behavioral\Specification\Item;
use DesignPatterns\Behavioral\Specification\NotSpecification;
use DesignPatterns\Behavioral\Specification\OrSpecification;
use DesignPatterns\Behavioral\Specification\AndSpecification;
use DesignPatterns\Behavioral\Specification\PriceSpecification;
require_once '../../autoload.php';

$spec1 = new PriceSpecification(50, 99);
$spec2 = new PriceSpecification(101, 200);

$orSpec = new OrSpecification($spec1, $spec2);
$andSpec = new AndSpecification($spec1, $spec2);
$notSpec = new NotSpecification($spec1);

echo (int) $orSpec->isSatisfiedBy(new Item(150)); // true
echo (int) $andSpec->isSatisfiedBy(new Item(150)); // false
echo (int) $notSpec->isSatisfiedBy(new Item(150)); // true
