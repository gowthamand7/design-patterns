<?php

use DesignPatterns\Behavioral\State\
{
    Request,
    CURL,
    Stream
};
require_once '../../autoload.php';

$request = new Request('https://google.com', [], '');
$curl = new CURL();
$stram = new Stream();

$curl->executeRequest($request);
$stram->executeRequest($request);

