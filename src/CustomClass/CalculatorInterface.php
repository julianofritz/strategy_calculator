<?php

namespace Calculator\CustomClass;

interface CalculatorInterface
{
    function __construct(OperatorInterface $operator);
}
