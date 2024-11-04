<?php

/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */

function simpleArraySum($ar) {
    // Write your code here
    $output = array_sum($ar);
    return $output;


    /**
     * 
     * Another method
     * 
        $answer = 0;
        $count = count($ar);
        for ($i = 0; $i < $count; $i++) {
            $answer += $ar[$i];
        }
        return $answer;
        }
     */

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);