<?php


namespace Unit\CustomClass;


use Calculator\CustomClass\OperatorInterface;
use Calculator\CustomClass\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    public function testLoadClass()
    {
        $calculator = new Subtraction();
        $this->assertInstanceOf(OperatorInterface::class, $calculator);
        $this->assertInstanceOf(Subtraction::class, $calculator);
    }

    /**
     * @dataProvider provider
     */
    public function testCalculate($num1, $num2, $expected)
    {
        $calculator = new Subtraction();
        $result = $calculator->calculate($num1, $num2);

        $this->assertEquals($expected, $result);
    }

    public function provider(): array
    {
        return [
            [4, 2, 2],
            [-4, -2, -2],
            [-5, 3, -8],
            [-1, 2, -3]
        ];
    }

}