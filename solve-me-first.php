<?php

// Complete the function solveMeFirst to compute the sum of two integers.

function solveMeFirst($a,$b){
  return $a + $b; // Just return and add the prams
}

$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
