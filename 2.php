<?php
/**
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms.
 * By starting with 1 and 2, the first 10 terms will be:
 *
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 *
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million,
 * find the sum of the even-valued terms.
 */

$values = array(1, 2);
do {
  $values[] = array_sum(array_slice($values, -2, 2));
} while (end($values) < 4000000);

$sum = 0;
foreach ($values as $value) {
  if ($value % 2 == 0) {
    $sum += $value;
  }
}
var_dump($sum);