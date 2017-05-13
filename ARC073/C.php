<?php
list($N, $T) = explode(" ", trim(fgets(STDIN)));
$t = explode(" ", trim(fgets(STDIN)));

$X = 0;

for ($i = 0; $i <= $N - 1; $i++) {
    if ($i == 0 || $t[$i - 1] + $T <= $t[$i]) {
        $X += $T;
    } else {
        $X +=  ($t[$i] - $t[$i - 1]);
    }
}

echo $X;