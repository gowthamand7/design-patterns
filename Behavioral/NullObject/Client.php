<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DesignPatterns\Behavioral\NullObject;

class Client
{
    private $_user;

    function __construct(UserInterface $user)
    {
        $this->_user = $user;
    }

    function getUserName()
    {
        if ($this->_user->isNull())
        {
            return null;
        }
        return $this->_user->getUserName();
    }

    function setUserName(string $name)
    {
        if ($this->_user->isNull())
        {
            return null;
        }
        return $this->_user->setUserName($name);
    }

}