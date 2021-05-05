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

    public function testCalculate()
    {
        $calculator = new Division();
        $calculator->setNum1(6);
        $calculator->setNum2(2);

        $result = $calculator->calculate();

        $this->assertEquals(3, $result);
    }
}