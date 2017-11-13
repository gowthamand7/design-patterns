<?php

namespace DesignPatterns\Behavioral\Observer;

class Subject implements \SplSubject
{
    private $_observers;
    private $_email;
    private $_id;

    function __toString()
    {
        return $this->getEmail();
    }

    function __construct(string $email)
    {
        $this->_observers = new \SplObjectStorage();
        $this->setEmail($email);
        $this->_id = uniqid();
    }

    function attach(\SplObserver $observer)
    {
        $this->_observers->attach($observer);
    }

    function detach(\SplObserver $observer)
    {
        $this->_observers->detach($observer);
    }

    function setEmail(string $email)
    {
        $this->_email = $email;
        $this->notify();
    }

    function getEmail(): string
    {
        return $this->_email;
    }

    function getId(): string
    {
        return $this->_id;
    }

    function notify()
    {
        foreach ($this->_observers as $observer)
        {
            $observer->update($this);
        }
    }

}