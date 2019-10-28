<?php

namespace factory;

class Operation
{

    protected $a = 0;
    protected $b = 0;

    public function setA($a = 0)
    {
        $this->a = $a;
    }

    public function setB($b = 0)
    {
        $this->b = $b;
    }

    public function getResult()
    {
        $result = 0;
        return $result;
    }

}