<?php
/**
 * Memento pattern is used to restore state of an object to a previous state. 
 * Memento pattern falls under behavioral pattern category.
 */
   

/**
 * Memento pattern uses three actor classes. Memento contains state of an object
 *  to be restored. Originator creates and stores states in Memento objects and 
 * Caretaker object is responsible to restore object state from Memento. We have 
 * created classes Memento, Originator and CareTaker.
 */
        
namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    private $_state;

    function __construct(string $state)
    {
        $this->_state = $state;
    }

    function getState(): string
    {
        return $this->_state;
    }

}