<?php
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));

$count = 0;

$a = $A;
$b = $B;
$c = $C;

while ($a % 2 == 0 && $b % 2 == 0 && $c % 2 == 0) {
    if ($count != 0 && ($a == $A && $b == $B && $c == $C)) {
        $count = -1;
        break;
    }
    $ta = $a;
    $tb = $b;
    $tc = $c;

    $count++;
    $a = ($tb + $tc) / 2;
    $b = ($tc + $ta) / 2;
    $c = ($ta + $tb) / 2;

}

echo $count;