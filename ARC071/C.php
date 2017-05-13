<?php
$N = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));

$max = max($a);
$min = min($a);

$mid = floor(($max + $min) / 2);

while (true) {
    $val = sum($mid);
    $r = sum($mid + 1);
    $l = sum($mid - 1);

    if (min($val, $r, $l) == $val) {
        $ans = $val;
        break;
    } elseif ($val < $r) {
        $max = $mid;
        $mid = ceil(($min + $mid) / 2);
    } else {
        $min = $mid;
        $mid = floor(($max + $mid) /2);
    }
}

echo $ans;

function sum($n)
{
    global $a;
    $sum = 0;
    foreach ($a as $v) {
        $sum += ($v - $n) * ($v - $n);
    }
    return $sum;
}

