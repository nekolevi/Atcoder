<?php
$N = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));

$plus = (bool)(0 <= $a[0]);
$sum = $a[0];
$count = 0;

$plus2 = !$plus;
$sum2 = $plus ? -1 : 1;
$count2 = abs($a[0]) + 1;

function calcCount($plus, $sum, $count){
    global $N, $a;

    for ($i = 1; $i < $N; $i++) {
        if ($plus && (-$sum - 1) < $a[$i]) {
            $count = $count + ($a[$i] - (-$sum - 1));
            $sum = -1;
            $plus = false;
        } elseif (!$plus && (-$sum + 1) > $a[$i]) {
            $count = $count + ((-$sum + 1) - $a[$i]);
            $sum = 1;
            $plus = true;
        } else {
            $sum = $sum + $a[$i];
            $plus = !$plus;
        }
    }

    return $count;
}

echo min(calcCount($plus, $sum, $count),calcCount($plus2, $sum2, $count2));