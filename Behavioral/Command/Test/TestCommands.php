<?php

use DesignPatterns\Behavioral\Command\Client;

require_once '../../../autoload.php';

$handle = fopen("php://stdin", "r");
$client = new Client();
$client->run('');
do
{
    $line = fgets($handle);
    $client->run(trim($line));
} while (1);
