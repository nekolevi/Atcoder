<?php
$N = trim(fgets(STDIN));
$H = explode(" ", trim(fgets(STDIN)));

$ans = 0;
$max = 0;

for ($i = 0; $i <= $N - 1; $i++) {
    if ($H[$i] > $max) {
        $max = $H[$i];
    }
    if ($max <= $H[$i]) {
        $ans++;
    }
}

echo $ans . "\n";