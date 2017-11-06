<?php

$handle = fopen("php://stdin", "r");
$client = new client();
$client->run('');
do
{
    $line = fgets($handle);
    $client->run(trim($line));
} while (1);
