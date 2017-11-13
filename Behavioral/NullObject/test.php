<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../autoload.php';

use DesignPatterns\Behavioral\NullObject\
{
    User,
    NullUser,
    Client
};
$service = new Client(new User());
$service->setUserName('gowthaman');
echo $service->getUserName();

$service = new Client(new NullUser());
$service->setUserName('');
echo $service->getUserName();

