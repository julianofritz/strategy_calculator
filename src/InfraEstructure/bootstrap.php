<?php
require __DIR__ . '/../vendor/autoload.php';

use Calculator\Domain\Service\Sum;
use Calculator\Domain\Service\Subtraction;
use Calculator\Domain\Service\Multiplication;
use Calculator\Domain\Service\Division;
use Calculator\Application\Calculator;

$sum    = new Sum();
$sub    = new Subtraction();
$mult   = new Multiplication();
$div    = new Division();

$calculatorSum = new Calculator();
echo $calculatorSum->setOperator($sum)->execute(2,2);
echo $calculatorSum->setOperator($sub)->execute(5,2);
echo $calculatorSum->setOperator($mult)->execute(3,3);
echo $calculatorSum->setOperator($div)->execute(40,2);



