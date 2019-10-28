<?php

namespace strategy;

class ConcreteStrategyA extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法a实现';
    }
}