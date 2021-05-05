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

    public function testCalculate()
    {
        $calculator = new Subtraction();
        $calculator->setNum1(4);
        $calculator->setNum2(2);
        $result = $calculator->calculate();

        $this->assertEquals(2, $result);
    }
}