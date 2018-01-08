<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Game
{

    abstract function init();

    abstract function start();

    abstract function end();

    final function play()
    {
        $this->init();
        $this->start();
        $this->end();
    }

}