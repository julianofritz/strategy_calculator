<?php
require __DIR__.'/../vendor/autoload.php';

use Calculator\CustomClass\Sum;

//sum
$calculator = new Sum();
$calculator->setNum1(2);
$calculator->setNum2(3);

echo $calculator->calculate();
