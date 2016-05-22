<?php
$P = trim(fgets(STDIN));

$x = - 2.16404 * log(2.16404 / $P);

if ($x <= 0){
    echo $P;
} else {
    echo $x + pow(2,-$x / 1.5) * $P;
}