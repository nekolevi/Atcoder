<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));
$A = explode(" ", trim(fgets(STDIN)));

$m = [0, 2, 5, 5, 4, 5, 6, 3, 7, 6];
$use = [];

$tmpN = $N;
$tmpM = $M;

for ($i = 1; $i <= 9; $i++) {
        $use[$i] = $m[$i];
}

$use = array_flip($use);
ksort($use);

foreach ($use as $key => $val){


}