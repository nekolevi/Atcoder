<?php
error_reporting(0);

$N = trim(fgets(STDIN));
$A = explode(" ", trim(fgets(STDIN)));

$min = min($A);
$tmp = $A;

while (true) {
    $tmp2 = [];
    foreach ($tmp as $t) {
        if ($t % $min != 0) {
            $tmp2[] = $t % $min;
        }
    }

    $tmp2[] = $min;

    $chk = min($tmp2);

    if ($chk == $min) {
        echo $min . "\n";
        break;
    } else {
        $tmp = $tmp2;
        $min = $chk;
    }

}




