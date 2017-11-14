<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\
{
    IO,
    Request
};
class CURL implements IO
{

    function executeRequest(Request $request)
    {
        /*
         * Logic of curl connectivity for given request
         */
        println($request->getUrl() . ' :: request sent by CURL');
    }

}