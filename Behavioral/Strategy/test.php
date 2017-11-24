<?php

use DesignPatterns\Behavioral\Strategy\
{
    Plus,
    Minus,
    Multiply,
    CalculateClient
};
require_once '../../autoload.php';
$puls = new Plus();

$client = new CalculateClient($puls);
println('Puls :');
println($client->calculate(2, 5));

$minus = new Minus();
$client->setStrategy($minus);
println('Minus :');
println($client->calculate(2, 5));

$multiply = new Multiply();
$client->setStrategy($multiply);
println('Multiply :');
println($client->calculate(2, 5));


