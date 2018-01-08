<?php

use DesignPatterns\Behavioral\TemplateMethod\
{
    Cricket,
    Football
};

require_once '../../autoload.php';

$c = new Cricket();
$c->play();

$f = new Football();
$f->play();