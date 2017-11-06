<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Logger;

class EmailLogger extends Logger
{

    protected function write(string $message)
    {
        echo "EmailLogger: $message" . PHP_EOL;
        return true;
    }

}
