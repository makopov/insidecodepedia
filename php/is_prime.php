<?php
/**
 * This script will determine if a number is a prime number, run it as so 'php is_prime.php 7'
 */

 function is_prime($number) {
   if($number == 2) {
     echo 'Prime';
   }

   if($number <= 1 || ($number % 2) == 2) {
     echo 'Not a prime';
   }

   for($i = 3; $i <= ceil(sqrt($number)); $i++) {
     if($number % $i == 0) {
       echo 'Not a prime';
       return true;
     }
   }

   print 'Prime';
 }

 is_prime($argv[1]);
