<?php
namespace factory;

class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->a - $this->b;
    }
}