<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\
{
    IO,
    Request
};
class Stream implements IO
{

    function executeRequest(Request $request)
    {
        /*
         * Logic of stram connectivity for given request
         */
        println($request->getUrl() . ' :: request sent by Stream');
    }

}