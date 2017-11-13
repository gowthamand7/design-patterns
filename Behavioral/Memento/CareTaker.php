<?php

use DesignPatterns\Behavioral\Memento\
{
    Memento,
    Originator
};
require_once '../../autoload.php';

$saved_states = [];

$org = new Originator();
$org->setNewState('#state 1');
$saved_states['s1'] = $org->saveToMemento();

$org->setNewState('#state 2');
$saved_states['s2'] = $org->saveToMemento();

$org->restoreFromMemento($saved_states['s1']);

var_dump($org);

$org->setNewState('#state 3');
$saved_states['s3'] = $org->saveToMemento();

$org->setNewState('#state 4');
$saved_states['s4'] = $org->saveToMemento();

$org->restoreFromMemento($saved_states['s2']);

var_dump($org);

$org->restoreFromMemento($saved_states['s4']);

var_dump($org);

