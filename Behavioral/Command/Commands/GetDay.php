<?php
namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;

class GetDay extends Command
{
    protected $_description = 'Get the current Day';
    protected $_commandName = 'GetDay';

    function Execute()
    {
        echo date("D", time()) . PHP_EOL;
    }

}