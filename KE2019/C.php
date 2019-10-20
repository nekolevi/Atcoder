<?php
$n = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));

$d = [];

foreach ($a as $k => $v){
    $d[$k] = $a[$k] - $b[$k];
}

$plus = [];
$minus = [];

foreach ($d as $i) {
    if ($i > 0) {
        $plus[] = $i;
    } elseif ($i < 0) {
        $minus[] = $i;
    }
}

if (array_sum($d) < 0) {
    echo -1 . "\n";
} elseif (count($minus) == 0) {
    echo 0 .  "\n";
} else {
    arsort($plus);

    $sum_minus = array_sum($minus);

    $s = 0;
    $cnt = 0;
    foreach ($plus as $p) {
        $cnt++;
        $s += $p;

        if ($s >= -$sum_minus) {
            break;
        }
    }

    echo count($minus) + $cnt . "\n";
}