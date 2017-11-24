<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\ICalculate;
class Plus implements ICalculate
{

    function calCulate(float $a, float $b) : float
    {
        return $a + $b;
    }

}