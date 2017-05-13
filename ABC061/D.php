<?php
$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

function ds($b, $n){
    if($n < $b){
        return $n;
    }else{
        return ds($b, floor($n / $b)) + ($n % $b);
    }
}

$test = 12345;

$max = 0; $min = ds(2, $test);
for ($i = 2; $i <= 12345; $i++){
    $k = ds($i, $test);
    if ($k > $max){
        $max = $k;
    }
    if($k < $min){
        $min = $k;
    }
}

echo $max . ' ' . $min;

