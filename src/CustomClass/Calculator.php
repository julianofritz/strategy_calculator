<?php


namespace Calculator\CustomClass;


class Calculator implements CalculatorInterface
{
    /**
     * @var OperatorInterface
     */
    private $operator;

    public function __construct(OperatorInterface $operator)
    {
        $a = 1;
        $this->operator = $operator;
    }

    public function execute()
    {
        try {
            return $this->operator->calculate();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

}
