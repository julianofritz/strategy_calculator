<?php


namespace Unit\CustomClass;


use Calculator\CustomClass\OperatorInterface;
use Calculator\CustomClass\Division;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testLoadClass()
    {
        $calculator = new Division();

        $this->assertInstanceOf(OperatorInterface::class, $calculator);
        $this->assertInstanceOf(Division::class, $calculator);
    }

    /**
     * @dataProvider provider
     */
    public function testCalculate($num1, $num2, $expected)
    {
        $calculator = new Division();
        $result = $calculator->calculate($num1, $num2);

        $this->assertEquals($expected, $result);
    }

    public function provider(): array
    {
        return [
            [4, 2, 2],
            [5, 2, 2.5]
        ];
    }
}