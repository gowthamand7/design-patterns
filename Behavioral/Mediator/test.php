<?php

use DesignPatterns\Behavioral\Mediator\Colleague;
use DesignPatterns\Behavioral\Mediator\Mediator;
require_once '../../autoload.php';

$mediator = new Mediator();

$colleague_gt = new Colleague('gowthaman');
$colleague_go = new Colleague('gokul');
$colleague_a = new Colleague('arun');
$colleague_m = new Colleague('mani');
$colleague_v = new Colleague('vijay');

$mediator->register($colleague_gt);
$mediator->register($colleague_go, $colleague_a, $colleague_m, $colleague_v);

$colleague_gt->send($colleague_go, 'Hi, How are you gokul !');
$colleague_go->send($colleague_gt, 'I am Fine !');

$colleague_a->send($colleague_m, 'Hi, DS have a new customer ');
$colleague_m->send($colleague_a, 'Okey, I will check');
