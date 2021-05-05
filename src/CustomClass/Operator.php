<?php


namespace Calculator\CustomClass;


class Operator implements OperatorInterface
{
    protected $num1;

    protected $num2;

    public function setNum1(float $num1)
    {
        $this->num1 = $num1;
    }

    public function setNum2(float $num2)
    {
        $this->num2 = $num2;
    }

    public function calculate(){}
}