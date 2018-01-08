<?php

use DesignPatterns\Behavioral\TemplateMethod\Game;

namespace DesignPatterns\Behavioral\TemplateMethod;

class Football extends Game
{

    function init()
    {
        println('Game Football is initializing ...................');
    }

    function start()
    {
        println('Game Football is starting..');
    }

    function end()
    {
        println('Game Football has been ended');
    }

}