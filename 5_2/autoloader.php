<?php

spl_autoload_register('classAutoloader');

function classAutoloader($className)
{
    $path = 'classes/';

    include $path.$className.'.php';
}
