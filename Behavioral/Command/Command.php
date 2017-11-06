<?php

namespace DesignPatterns\Behavioral\Command;

interface Command
{

    function Execute();

    function getDescription();

    function getCommandName();
}