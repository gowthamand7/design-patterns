<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use DesignPatterns\Behavioral\Observer\
{
    Observer,
    Subject
};

require_once '../../autoload.php';

$observer = new Observer();

$s1 = new Subject('gowthamand7@gmail.com');
$s1->attach($observer);
$s1->setEmail('user0@gmail.com');
$s1->setEmail('user10@gmail.com');

$s2 = new Subject('user1@gmail.com');
$s2->attach($observer);
$s2->setEmail('user11@gmail.com');
$s2->setEmail('user12@gmail.com');

$s3 = new Subject('user2@gmail.com');
$s3->attach($observer);
$s3->setEmail('user21@gmail.com');
$s3->setEmail('user22@gmail.com');

$s4 = new Subject('user3@gmail.com');
$s4->attach($observer);
$s4->setEmail('user31@gmail.com');
$s4->setEmail('user32@gmail.com');

var_dump($observer->getChangedUsers());
