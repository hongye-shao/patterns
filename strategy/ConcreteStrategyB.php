<?php

namespace strategy;

class ConcreteStrategyB extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法b实现';
    }
}