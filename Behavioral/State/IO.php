<?php

/**
 * In State pattern a class behavior changes based on its state. This type of 
 * design pattern comes under behavior pattern.
 */

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\
{
    Request
};
//State
interface IO
{

    function executeRequest(Request $request);
}