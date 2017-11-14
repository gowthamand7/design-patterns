<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\IO;
class Request
{
    private $_url;
    private $_headers;
    private $_body;
    private $_state;

    function __construct(string $url, array $headers, string $body)
    {
        $this->_url = $url;
        $this->_headers = $headers;
        $this->_body = $body;
    }

    function getUrl(): string
    {
        return $this->_url;
    }

    function setState(IO $io)
    {
        $this->_state = $io;
    }

}