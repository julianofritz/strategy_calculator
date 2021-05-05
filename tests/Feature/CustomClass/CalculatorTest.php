<?php


namespace Unit\CustomClass;


use Calculator\CustomClass\Calculator;
use Calculator\CustomClass\CalculatorInterface;
use Calculator\CustomClass\Division;
use Calculator\CustomClass\Multiplication;
use Calculator\CustomClass\Subtraction;
use Calculator\CustomClass\Sum;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testLoadClass()
    {
        $sum = new Sum();
        $calculator = new Calculator($sum);

        $this->assertInstanceOf(CalculatorInterface::class, $calculator);
        $this->assertInstanceOf(Calculator::class, $calculator);
    }

    public function testSum()
    {
        $sum = new Sum();
        $sum->setNum1(1);
        $sum->setNum2(1);

        $calculator = new Calculator($sum);
        $result = $calculator->execute();

        $this->assertEquals(2, $result);
    }

    public function testSubtraction()
    {
        $sub = new Subtraction();
        $sub->setNum1(2);
        $sub->setNum2(1);

        $calculator = new Calculator($sub);
        $result = $calculator->execute();

        $this->assertEquals(1, $result);
    }
    public function testMultiplication()
    {
        $mult = new Multiplication();
        $mult->setNum1(2);
        $mult->setNum2(3);

        $calculator = new Calculator($mult);
        $result = $calculator->execute();

        $this->assertEquals(6, $result);
    }

    public function testDivision()
    {
        $div = new Division();
        $div->setNum1(6);
        $div->setNum2(3);

        $calculator = new Calculator($div);
        $result = $calculator->execute();

        $this->assertEquals(2, $result);
    }


}