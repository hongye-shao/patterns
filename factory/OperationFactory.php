<?php

namespace factory;

class OperationFactory
{
    public static function create($operation)
    {
        switch($operation)
        {
            case '+':
            $obj = new OperationAdd;
            break;
            case '-':
            $obj = new OperationSub;
            break;
        }

        return $obj;
    }
} 