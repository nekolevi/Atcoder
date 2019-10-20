<?php
$N = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));

$p = 0;
$sum = 0;
for ($i = 0; $i <= $N - 1; $i++) {
    $sum += abs($a[$i] - $p);
    $p = $a[$i];
}

$sum += abs($a[$N - 1]);

for ($i = 0; $i <= $N - 1; $i++) {
    $l = $a[$i - 1] ?? 0;
    $h = $a[$i + 1] ?? 0;

    if (($l <= $a[$i] && $a[$i] <= $h) || ($h <= $a[$i] && $a[$i] <= $l)) {
        echo($sum . "\n");
    } else {
        echo($sum - min(abs($a[$i] - $l), abs($a[$i] - $h)) * 2 . "\n");
    }
}