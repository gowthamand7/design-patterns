<?php

class GetMonth implements Command
{
    private $_description = 'Get the current month';
    private $_commandName = 'getMonth';

    function getDescription()
    {
        return $this->_description;
    }

    function getCommandName()
    {
        return $this->_commandName;
    }

    function Execute()
    {
        echo date("F", time()) . PHP_EOL;
    }

}