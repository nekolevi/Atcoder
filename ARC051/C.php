<?php
list($N, $A, $B) = explode(" ", fgets(STDIN));
$a = explode(" ", fgets(STDIN));
$x=[];
$num = pow(10,9) + 7;

foreach($a as $value){
    $x[]=[floor($value/$num), $value%$num];
}

for($i = 1; $i <= $B; $i++){
    foreach($x as $arr){
        $arr[0] = floor(($arr[1]) * $B / $num);
        $arr[1] = ($arr[1]) * $B % $num;
    }
}

foreach ($x as $key => $arr) {
    $quotient[$key]  = $arr[0];
    $remainder[$key] = $arr[1];
}

array_multisort($quotient, SORT_ASC, $remainder, SORT_ASC, $x);

foreach($x as $arr){
    echo ("$arr[1]\n");
}