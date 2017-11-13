<?php
namespace DesignPatterns\Behavioral\Observer;

class Observer implements \SplObserver
{
    private $_changedUsers;

    function update(\SplSubject $subject)
    {
        $this->_changedUsers[] = clone $subject;
        echo $subject->getId() . " email has been changed to " . $subject->getEmail() . PHP_EOL;
    }

    function getChangedUsers()
    {
        return $this->_changedUsers;
    }

}