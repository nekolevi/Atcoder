<?php
list($K, $A, $B) = explode(" ", trim(fgets(STDIN)));

$bis = 1;
$lest = $K;

if (!(($B - $A > 2) || ($K <= $A))) {
    echo $K + 1 . "\n";
} else {
    $bis = $A;
    $lest -= ($A - 1);

    if ($lest % 2 == 0) {
        $bis += ($B - $A) * $lest / 2;
    } else {
        $bis += ($B - $A) * ($lest - 1) / 2 + 1;
    }

    echo $bis . "\n";
}
