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

    public function testCalculate()
    {
        $calculator = new Sum();
        $calculator->setNum1(1);
        $calculator->setNum2(1);
        $result = $calculator->calculate();

        $this->assertEquals(2, $result);
    }
}