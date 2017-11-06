<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Logger;

class HiddenLogger extends Logger
{

    protected function write(string $message)
    {
        echo "HidddenLogger: $message" . PHP_EOL;
        return true;
    }

}