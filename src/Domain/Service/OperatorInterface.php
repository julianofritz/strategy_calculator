<?php

declare(strict_types=1);

namespace Calculator\Domain\Service;

interface OperatorInterface
{
    function calculate(float $num1, float $num2): float;
}
