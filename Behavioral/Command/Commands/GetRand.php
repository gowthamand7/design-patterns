<?php

class GetRand implements Command
{
    private $_description = 'To get the Random number';
    private $_commandName = 'getRand';

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
        echo rand() . PHP_EOL;
    }

}