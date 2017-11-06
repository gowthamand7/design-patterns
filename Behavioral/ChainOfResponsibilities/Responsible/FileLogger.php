<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Logger;

class FileLogger extends Logger
{

    protected function write(string $message)
    {
        echo "FileLogger: $message" . PHP_EOL;
        return true;
    }

}
