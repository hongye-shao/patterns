<?php 
namespace factory;

class OperationAdd extends Operation 
{
    
    public function getResult()
    {
       return $this->a + $this->b;    
    }
}