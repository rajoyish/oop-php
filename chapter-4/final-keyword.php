<?php

final class PercentageCalculator
{
  public function calculatePercentage($part, $whole): float
  {
    return $part / $whole * 100;
  }
}

class FinanceCalculator extends PercentageCalculator
{
  public function calculatePercentage($a, $b): float
  {
    return $a / $b;
  }
}

$calculator = new FinanceCalculator();
print $calculator->calculatePercentage(5, 20) . PHP_EOL;

//$calculator = new Calculator();
//print $calculator->calculatePercentage(5, 20) . PHP_EOL;
