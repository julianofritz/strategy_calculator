<?php

declare(strict_types=1);

namespace Calculator\Application;

use Calculator\Domain\Service\OperatorInterface;

interface CalculatorInterface
{
    public function setOperator(OperatorInterface $operator): Calculator;

    public function execute(float $num1, float $num2): float;
}
