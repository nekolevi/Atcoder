<?php
$n = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));

$d = array_diff($a, $b);


$plus = [];
$minus = [];

foreach ($d as $i) {
    if ($i > 0) {
        $plus[] = $i;
    } elseif ($i < 0) {
        $minus = $i;
    }
}

if (array_sum($d) < 0) {
    echo -1;
} elseif (count($minus) == 0) {
    echo 0;
} else {
    arsort($plus);

    $sum_minus = array_sum($minus);

    $s = 0;
    $count = 0;
    foreach ($plus as $p) {
        $count++;
        $s += $p;

        if ($s > $sum_minus) {
            break;
        }
    }

    echo count($minus) + $count;
}