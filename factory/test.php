<?php

spl_autoload_register(function ($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
});

use factory\OperationFactory;

$operation = OperationFactory::create('-');
$operation->setA(3);
$operation->setB(2);

echo $operation->getResult() . PHP_EOL;