<?php

class GetDate implements Command
{
    private $_description = 'Get the current date';
    private $_commandName = 'getDate';

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
        echo date(DATE_RFC2822, time()) . PHP_EOL;
    }

}