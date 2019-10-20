<?php
list($N, $Q) = explode(" ", trim(fgets(STDIN)));
$s = trim(fgets(STDIN));

While ($str = trim(fgets(STDIN))) {
    list($t, $d) = explode(" ", trim(fgets(STDIN)));
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




