<?php


namespace Calculator\CustomClass;


class Division extends Operator
{
    public function calculate(): float
    {
        return $this->num1 / $this->num2;
    }
}