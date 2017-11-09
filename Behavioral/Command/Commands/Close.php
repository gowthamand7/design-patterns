<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;

class Close extends Command
{
    protected $_description = 'Exit from the app';
    protected $_commandName = 'Close';

    function Execute()
    {
        echo "Thank You !";
        exit();
    }

}