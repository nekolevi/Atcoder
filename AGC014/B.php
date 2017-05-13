<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));

$w = array_fill(1, $N + 1, 0);

While ($str = trim(fgets(STDIN))) {
    list($a, $b) = explode(" ", $str);

    $M = max($a, $b);
    $m = min($a, $b);

    $w[$m]++;
    $w[$M]--;
}

$flg = true;

for ($i = 1; $i <= $N; $i++) {
    if ($w[$i] % 2 != 0) {
        $flg = false;
        break;
    }

    $w[$i + 1] += $w[$i];
}

echo $flg ? 'YES' : 'NO';


