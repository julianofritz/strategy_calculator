<?php

declare(strict_types=1);

namespace Unit\Domain\Service;

use Calculator\Domain\Service\OperatorInterface;
use Calculator\Domain\Service\Division;
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