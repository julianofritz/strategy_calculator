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
        $this->operator = $operator;
    }

    public function execute()
    {
        $a = 1;
$b = $a;
$asfadsfadsfadsfadsfadsfadsfsfd = 0;
        try {
            return $this->operator->calculate();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

    }

}
