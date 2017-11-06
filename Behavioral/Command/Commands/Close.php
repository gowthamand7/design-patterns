<?php

class Close implements Command
{
    private $_description = 'Exit from the app';
    private $_commandName = 'close';

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
        echo "Thank You !";
        exit();
    }

}