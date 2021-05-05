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

    public function testCalculate()
    {
        $calculator = new Multiplication();
        $calculator->setNum1(2);
        $calculator->setNum2(1);
        $result = $calculator->calculate();

        $this->assertEquals(2, $result);
    }
}