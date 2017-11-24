<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\ICalculate;
class CalculateClient
{
    private $strategy;

    function __construct(ICalculate $iCalculate)
    {
        $this->strategy = $iCalculate;
    }

    function setStrategy(ICalculate $iCalculate)
    {
        $this->strategy = $iCalculate;
    }

    function calculate(float $a, float $b): float
    {
        return $this->strategy->calCulate($a, $b);
    }

}