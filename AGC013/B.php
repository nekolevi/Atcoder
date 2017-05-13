<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));

$V = [];
$sed = [];
$array = [];

for ($i = 0; $i <= $N - 1; $i++) {
    $a =  explode(" ", trim(fgets(STDIN)));
    $V[$a[0]][]= $a[1];
    $V[$a[1]][] = $a[0];
}

$q = [1];


