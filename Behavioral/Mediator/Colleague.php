<?php

namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Mediator;
/**
 * Participant
 */
class Colleague
{
    private $_mediator;
    private $_name;

    function __construct(string $name)
    {
        $this->_name = $name;
    }

    function getUserName(): string
    {
        return $this->_name;
    }

    function setMediator(MediatorAbstract $mediator)
    {
        $this->_mediator = $mediator;
    }

    function getMediator(): Mediator
    {
        $this->_mediator;
    }

    function send(Colleague $to, string $message)
    {
        $this->_mediator->send($this, $to, $message);
    }

    function receive(Colleague $from, string $message)
    {
        echo $from->getUserName() . " :: " . $message . PHP_EOL;
        return true;
    }

}