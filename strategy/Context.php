<?php

namespace strategy;

class Context
{
    private $strategy;

    public function __construct($strategy)
    {
        $this->stragey = $strategy;
    }

    public function contextInterface()
    {
        $this->stragey->algorithmInterface();
    }
}