<?php
namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;

class GetMonth extends Command
{
    protected $_description = 'Get the current month';
    protected $_commandName = 'GetMonth';

    function Execute()
    {
        echo date("F", time()) . PHP_EOL;
    }

}