<?php

use strategy\ConcreteStrategyA;
use strategy\ConcreteStrategyB;
use strategy\Context;

spl_autoload_register(function ($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
});

$context = new Context(new ConcreteStrategyB);

$context->contextInterface();