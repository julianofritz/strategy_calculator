<?php


namespace Calculator\CustomClass;


class Calculator
{
    /**
     * @var OperatorInterface
     */
    private $operator;

    public function __construct(OperatorInterface $operator)
    {
        $className = get_class($operator);

        $this->operator = new $className;
    }

    public function execute($num1, $num2)
    {
        try {
            return $this->operator->calculate($num1, $num2);
        } catch (\ArgumentCountError | \TypeError $e) {
            throw new \Exception($e->getMessage());
        }

    }

}