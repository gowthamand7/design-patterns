<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DesignPatterns\Behavioral\NullObject;
use DesignPatterns\Behavioral\NullObject\UserInterface;

class NullUser implements UserInterface
{

    function isNull() : bool
    {
        return true;
    }

}