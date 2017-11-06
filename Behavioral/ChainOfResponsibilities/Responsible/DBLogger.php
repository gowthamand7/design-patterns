<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Logger;

class DBLogger extends Logger
{

    protected function write(string $message)
    {
        echo "DBLogger: $message" . PHP_EOL;
        return true;
    }

}

