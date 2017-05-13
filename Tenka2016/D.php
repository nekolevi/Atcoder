<?php
list($H, $W, $A, $B) = explode(" ", trim(fgets(STDIN)));
$memo = [];

function DP($h, $w){
    global $H, $W, $A, $B ,$memo;
    $num = pow(10,9) + 7;

    if(isset($memo[$h][$w])){
        return $memo[$h][$w];
    }

    if($h == 1 && $w == 1){
        return 1;
    }
    if($h < 1 || $w < 1){
        return 0;
    }
    if($H - $A + 1 <= $h && $w<= $B){
        return 0;
    }

    return $memo[$h][$w] = (DP($h - 1, $w) + DP($h, $w - 1)) % $num;
}

echo DP($H, $W);
