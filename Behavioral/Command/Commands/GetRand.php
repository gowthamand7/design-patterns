<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;

class GetRand extends Command
{
    protected $_description = 'To get the Random number';
    protected $_commandName = 'GetRand';

    function Execute()
    {
        echo rand() . PHP_EOL;
    }

}