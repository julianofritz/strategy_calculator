<?php


namespace Unit\CustomClass;


use Calculator\CustomClass\OperatorInterface;
use Calculator\CustomClass\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testLoadClass()
    {
        $calculator = new Sum();
        $this->assertInstanceOf(OperatorInterface::class, $calculator);
        $this->assertInstanceOf(Sum::class, $calculator);
    }

    /**
     * @dataProvider provider
     */
    public function testCalculate($num1, $num2, $expected)
    {
        $calculator = new Sum();
        $result = $calculator->calculate($num1, $num2);

        $this->assertEquals($expected, $result);
    }

    public function provider(): array
    {
        return [
            [1,2,3],
            [2,2,4],
            [-2,2,0]
        ];
    }

}