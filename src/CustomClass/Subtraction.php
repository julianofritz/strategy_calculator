<?php


namespace Calculator\CustomClass;


class Subtraction extends Operator
{
    public function calculate(): float
    {
        return $this->num1 - $this->num2;
    }
}