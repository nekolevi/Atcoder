<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));

$s = [];
for ($i = 1; $i <= $N; $i++) {
    $tmp = explode(" ", trim(fgets(STDIN)));
    unset($tmp[0]);
    if ($i == 1) {
        $s = $tmp;
    } else {
        $s = array_intersect($s, $tmp);
    }

}

echo count($s) . "\n";