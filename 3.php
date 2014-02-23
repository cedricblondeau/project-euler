<?php
/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

function findPrimeFactors($value) {
  if (is_int($value) && $value > 0) {
    $primeFactors = array();
    $lastValue = $value;

    while (!isPrimeNumber($lastValue)) {
      $i = 2;
      $primeFactor = null;
      while ($i < $lastValue && !$primeFactor) {
        if ($lastValue % $i == 0) {
          $primeFactor = $i;
          $primeFactors[] = $primeFactor;
          $lastValue = $lastValue / $i;
        }
        else {
          $i++;
        }
      }
    }
    $primeFactors[] = $lastValue;

    return $primeFactors;
  }
  else {
    return false;
  }
}

function isPrimeNumber($value) {
  if (is_int($value) && $value > 0) {
    if ($value == 1) {
      return false;
    }
    elseif ($value == 2) {
      return true;
    }
    elseif ($value % 2 == 0) {
      return false;
    }
    else {
      for($i = 3; $i <= ceil(sqrt($value)); $i = $i + 2) {
        if ($value % $i == 0)
        {
          return false;
        }
      }
      return true;
    }
  }
  else {
    return false;
  }
}

var_dump(findPrimeFactors(13195));
var_dump(findPrimeFactors(600851475143));
