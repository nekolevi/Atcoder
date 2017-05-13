<?php
$N = trim(fgets(STDIN));

for ($i = 0; $i <= $N - 1; $i++) {
    $c[] = trim(fgets(STDIN));
}

$sum = 0;

for ($i = 0; $i <= $N - 1; $i++) {
    if ($c[$i] % 2 == 0) {
        $sum += $c[$i] / 2;
    } else {
        if ($i == $N - 1 || $c[$i + 1] == 0) {
            $sum += ($c[$i] - 1) / 2;
        } else {
            $c[$i + 1]--;
            $sum += ($c[$i] + 1) / 2;
        }
    }
}

echo $sum;