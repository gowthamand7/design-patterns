<?php

namespace DesignPatterns\Behavioral\Command;

abstract class Command
{

    abstract function Execute();

    function getDescription()
    {
        return $this->_description;
    }

    function getCommandName()
    {
        return $this->_commandName;
    }
}