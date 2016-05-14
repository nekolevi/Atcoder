<?php
list($N, $K) = explode(" ", trim(fgets(STDIN)));
$a = explode(" ", trim(fgets(STDIN)));

$s1 = array_sum(array_slice($a, 0 , $K));
$sum = $s1;

for($i = 2; $i <= $N - $K + 1; $i++){
    $s1 = $s1 - $a[$i - 2] + $a[$K + $i - 2];
    $sum += $s1;
}

echo $sum;