<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DesignPatterns\Behavioral\NullObject;
use DesignPatterns\Behavioral\NullObject\UserInterface;

class User implements UserInterface
{
    private $_userName;

    function getUserName()
    {
        return $this->_userName;
    }

    function setUserName(string $name)
    {
        $this->_userName = $name;
    }

    function isNull() : bool
    {
        return false;
    }

}