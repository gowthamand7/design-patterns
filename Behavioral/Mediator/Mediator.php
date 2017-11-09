<?php

namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Colleague;
use DesignPatterns\Behavioral\Mediator\MediatorAbstract;
/**
 * Chat Room 
 */
class Mediator extends MediatorAbstract
{
    private $_participants = [];

    function register(Colleague ...$participants)
    {
        foreach ($participants as $participant)
        {
            $userName = $participant->getUserName();
            if (isset($this->_participants[$userName]) == false)
            {
                $this->_participants[$userName] = $participant;
            }
            $participant->setMediator($this);
        }
    }

    function send(Colleague $from, Colleague $to, string $message): bool
    {
        return $to->receive($from, $message);
    }

}