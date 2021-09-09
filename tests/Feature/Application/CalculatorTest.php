<?php

declare(strict_types=1);

namespace Feature\Application;

use Calculator\Application\Calculator;
use Calculator\Domain\Service\Division;
use Calculator\Domain\Service\Multiplication;
use Calculator\Domain\Service\OperatorInterface;
use Calculator\Domain\Service\Subtraction;
use Calculator\Domain\Service\Sum;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator();
    }
    public function testLoadClass(): void
    {
        $this->assertInstanceOf(Calculator::class, $this->calculator);
    }

    public function testShoulThrowTypeErroException(): void
    {
        $sum = new Sum();

        $this->expectException(\TypeError::class);
        $this->calculator->setOperator($sum)->execute(null, null);
    }

    public function testShoulThrowArgumentCountException(): void
    {
        $sum = new Sum();

        $this->expectException(\ArgumentCountError::class);
        $this->calculator->setOperator($sum)->execute(2);
    }

    /**
     * @dataProvider operatorProvider
     */
    public function testAllOperatorsTypes(OperatorInterface $operator, float $num1, float $num2, float $expect): void
    {
        $result = $this->calculator->setOperator($operator)->execute($num1, $num2);

        $this->assertEquals($expect, $result);
    }

    public function operatorProvider(): array
    {
        return [
            [new Sum(), 2, 2, 4],
            [new Subtraction(), 5, 3, 2],
            [new Multiplication(), 10, 8, 80],
            [new Division(), 100, 10, 10],
        ];
    }

}