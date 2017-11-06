<?php

spl_autoload_register(function ($class)
{
    $class = explode('\\', $class);
    unset($class[0]);
    $class = implode('/', $class);
    include $class . '.php';
});


