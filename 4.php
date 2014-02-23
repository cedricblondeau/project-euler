<?php
/**
 * A palindromic number reads the same both ways.
 * The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$largestPalindromicNumber = 0;
for ($i = 100; $i <= 999; $i++ ) {
  for ($j = 100; $j <= 999; $j++ ) {
    $product = $i * $j;
    if ($product > $largestPalindromicNumber && isPalindromicNumber($product)) {
      $largestPalindromicNumber = $product;
    }
  }
}
var_dump($largestPalindromicNumber);

function isPalindromicNumber($number)
{
  if (strlen($number) == 1) {
    return true;
  }
  elseif (strlen($number) == 2) {
    $leftPart = substr($number, 0, 1);
    $rightPart = substr($number, 1, 2);
    if ($leftPart == $rightPart) {
      return true;
    }
  }
  elseif (strlen($number) % 2 == 0) {
    $leftPart = substr($number, 0, strlen($number) / 2);
    $rightPart = strrev(substr($number, strlen($number) / 2, strlen($number)));
    if ($leftPart == $rightPart) {
      return true;
    }
  }
  return false;
}