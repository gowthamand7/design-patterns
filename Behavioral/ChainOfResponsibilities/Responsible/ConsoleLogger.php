<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Logger;

class ConsoleLogger extends Logger
{

    protected function write(string $message)
    {
        echo "CONSOLE: $message" . PHP_EOL;
        return true;
    }

}

