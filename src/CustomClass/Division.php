<?php


namespace Calculator\CustomClass;


class Division implements OperatorInterface
{

    public function calculate(float $num1, float $num2): float
    {
        return $num1 / $num2;
    }
}