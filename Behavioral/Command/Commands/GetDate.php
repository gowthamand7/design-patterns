<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;

class GetDate extends Command
{
    protected $_description = 'Get the current date';
    protected $_commandName = 'GetDate';

    function Execute()
    {
        echo date(DATE_RFC2822, time()) . PHP_EOL;
    }

}