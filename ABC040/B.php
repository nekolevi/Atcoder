<?php
$n = trim(fgets(STDIN));

$max = floor(sqrt($n));
$min = $n;

for($i = 1; $i <= $max; $i++){
    $long = floor($n / $i);
    $amari = $n - $long * $i;
    $sa = $long - $i;
    
    $temp =  $amari + $sa;
    
    if ($temp < $min){
        $min = $temp;
    }
}

echo $min;