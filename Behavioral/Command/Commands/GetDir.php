<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;

class GetDir extends Command
{
    protected $_description = 'Get the current directory';
    protected $_commandName = 'GetDir';

    function Execute()
    {
        echo __DIR__ . PHP_EOL;
    }

}