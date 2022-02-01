<?php
require __DIR__.'/../vendor/autoload.php';

use Calculator\CustomClass\Sum;
//sum
$calculator = new Sum();

echo $calculator->calculate(1, 6);
