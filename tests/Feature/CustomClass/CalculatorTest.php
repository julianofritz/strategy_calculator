<?php


namespace Unit\CustomClass;


use Calculator\CustomClass\Calculator;
use Calculator\CustomClass\CalculatorInterface;
use Calculator\CustomClass\Division;
use Calculator\CustomClass\Multiplication;
use Calculator\CustomClass\OperatorInterface;
use Calculator\CustomClass\Subtraction;
use Calculator\CustomClass\Sum;
use http\Exception;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * @var OperatorInterface
     */
    private $operator;

    public function setUp(): void
    {
        $this->operator = new Sum();
        $this->calculator = new Calculator($this->operator);
    }
    public function testLoadClass()
    {
        $sum = new Sum();
        $calculator = new Calculator($sum);

        $this->assertInstanceOf(Calculator::class, $calculator);
    }

    public function testException()
    {
        $sum = new Sum();
        $calculator = new Calculator($sum);

        $this->expectException(\Exception::class);
        $calculator->execute(null,null);
    }

    public function testSum()
    {
        $sum = new Sum();
        $calculator = new Calculator($sum);
        $result = $calculator->execute(1, 3);

        $this->assertEquals(4, $result);
    }

    public function testSubtraction()
    {
        $sub = new Subtraction();
        $calculator = new Calculator($sub);
        $result = $calculator->execute(3,1);

        $this->assertEquals(2, $result);
    }
    public function testMultiplication()
    {
        $mult = new Multiplication();
        $calculator = new Calculator($mult);
        $result = $calculator->execute(3,2);

        $this->assertEquals(6, $result);
    }

    public function testDivision()
    {
        $div = new Division();
        $calculator = new Calculator($div);
        $result = $calculator->execute(6,3);

        $this->assertEquals(2, $result);
    }

}