<?php

declare(strict_types=1);

namespace Calculator\Application;

use Calculator\Domain\Service\OperatorInterface;

class Calculator
{
    /* @var OperatorInterface */
    private $operator;

    public function setOperator(OperatorInterface $operator): Calculator
    {
        $className = get_class($operator);

        $this->operator = new $className;

        return $this;
    }

    public function execute(float $num1, float $num2): float
    {
        try {
            return $this->operator->calculate($num1, $num2);
        } catch (\ArgumentCountError | \TypeError | \Exception $e) {
            throw new \Exception($e->getMessage());
        }

    }

}