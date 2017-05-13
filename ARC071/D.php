<?php
list($n, $m) = explode(" ", trim(fgets(STDIN)));
$X = explode(" ", trim(fgets(STDIN)));
$Y = explode(" ", trim(fgets(STDIN)));

$memo = [];

function DP($i, $j)
{
    global $X, $Y, $memo;
    $num = pow(10, 9) + 7;

        if ($i == 0 || $j == 0) {
        return 0;
    }

    if (isset($memo[$i][$j])) {
        return $memo[$i][$j];
    }

    $sum = DP($i - 1, $j) + DP($i, $j - 1) - DP($i - 1, $j - 1) + ($X[$i] - $X[0]) * ($Y[$j] - $Y[0]) % $num;

    if($i != 1 && $j != 1){
        $sum += ($X[$i] - $X[$i - 1]) * ($Y[$j] - $Y[$j - 1]);
    }

    if ($i != 1) {
        $sum += ($X[$i] - $X[$i - 1]) * ($Y[$j] - $Y[0]);
    }
    if ($j != 1) {
        $sum += ($X[$i] - $X[0]) * ($Y[$j] - $Y[$j - 1]);
    }

    $memo[$i][$j] = $sum % $num;

    return $memo[$i][$j];

}

echo DP($n - 1, $m - 1);