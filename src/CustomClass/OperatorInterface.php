<?php

namespace Calculator\CustomClass;

interface OperatorInterface
{
    function setNum1(float $num1);

    function setNum2(float $num2);

    function calculate();
}
