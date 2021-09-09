<?php

declare(strict_types=1);

namespace Calculator\Domain\Service;

class Sum implements OperatorInterface
{
    public function calculate(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }
}