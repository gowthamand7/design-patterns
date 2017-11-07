<?php

namespace DesignPatterns\Behavioral\Command;

class CommandParser
{
    private $_avaliableCommands;

    function __construct(array $avaliableCommands)
    {
        $this->_avaliableCommands = $avaliableCommands;
    }

    function parseCommand(string $cmd)
    {
        foreach ($this->_avaliableCommands as $command)
        {
            if ($command->getCommandName() == $cmd)
            {
                return $command;
            }
        }
        return false;
    }

}