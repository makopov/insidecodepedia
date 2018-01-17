<?php
/**
 * This script will determine if a number is a prime number, run it as so 'php is_prime.php 7'
 */

function is_prime($number) {
  if($number == 2) {
    print 'Prime';
    return;
  }

  if($number <= 1 || ($number % 2) == 0) {
    print 'Not a prime';
    return;
  }

  for($i = 3; $i <= ceil(sqrt($number)); $i++) {
    if(($number % $i) == 0) {
      print 'Not a prime';
      return;
    }
  }

  print 'Prime';
}

if(!isset($argv[1])) {
  print 'Please specify a number as the only parameter, i.e. php is_prime 7';
  exit();
}

is_prime($argv[1]);
