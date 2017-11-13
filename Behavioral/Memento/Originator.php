<?php

namespace DesignPatterns\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\Memento;
class Originator
{
    private $_state;

    function setNewState(string $state)
    {
        $this->_state = $state;
        echo ("Originator: Setting state to " . $this->_state . PHP_EOL);
    }

    function saveToMemento()
    {
        echo ("Originator: Saving to Memento." . PHP_EOL);
        return new Memento($this->_state);
    }

    function restoreFromMemento(Memento $memento)
    {
        $this->_state = $memento->getState();
        echo ("Originator: State after restoring from Memento: " . $this->_state . PHP_EOL);
    }

}