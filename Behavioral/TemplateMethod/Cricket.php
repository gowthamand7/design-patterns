<?php

use DesignPatterns\Behavioral\TemplateMethod\Game;

namespace DesignPatterns\Behavioral\TemplateMethod;

class Cricket extends Game
{

    function init()
    {
        println('Game Cricket is initializing ...................');
    }

    function start()
    {
        println('Game Cricket is starting..');
    }

    function end()
    {
        println('Game Cricket has been ended');
    }

}