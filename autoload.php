<?php

/**
 * Autoloads files for Design Pattern and tracks what has been loaded.
 *
 * @category Study
 * @package  Design_Pattern
 * @author   Gowthaman Thangavel <gowthamand7@gmail.com>
 * @license  https://github.com/gowthamand7/design-patterns/blob/master/LICENSE 
 * Apache License 2.0
 * @link     https://github.com/gowthamand7/design-patterns/doc 
 */
spl_autoload_register('autoLoad');

/**
 * Auto loader function 
 * 
 * @param namespace/class name $class name of the class
 * 
 * @return void
 */
function autoLoad($class)
{
    $class = explode('\\', $class);
    unset($class[0]);
    $class = implode('/', $class);
    include $class . '.php';
}