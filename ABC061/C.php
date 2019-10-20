<?php
list($N, $K) = explode(" ", trim(fgets(STDIN)));

$count = [];
While ($str = trim(fgets(STDIN))) {
    list($a, $b) = explode(" ", $str);

    $count[$a] = isset($count[$a]) ? $count[$a] + $b : $b;
}

ksort($count);

$sum = 0;
foreach ($count as $key => $val) {
    $sum += $val;
    if ($K <= $sum) {
        echo $key;
        break;
    }
}




