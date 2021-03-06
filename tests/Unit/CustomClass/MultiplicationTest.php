<?php


namespace Unit\CustomClass;


use Calculator\CustomClass\OperatorInterface;
use Calculator\CustomClass\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testLoadClass()
    {
        $calculator = new Multiplication();
        $this->assertInstanceOf(OperatorInterface::class, $calculator);
        $this->assertInstanceOf(Multiplication::class, $calculator);
    }

    /**
     * @dataProvider provider
     */
    public function testCalculate($num1, $num2, $expected)
    {
        $calculator = new Multiplication();
        $calculator->setNum1($num1);
        $calculator->setNum2($num2);
        $result = $calculator->calculate();

        $this->assertEquals($expected, $result);
    }

    public function provider(): array
    {
        return [
            [4, 2, 8],
            [-4, -2, 8],
            [-5, 3, -15],
            [-1, 2, -2]
        ];
    }
}