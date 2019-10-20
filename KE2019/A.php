<?php
list($a, $b, $c, $x, $y) = explode(" ", trim(fgets(STDIN)));

$case1 = $a * $x + $b * $y;

if ($x <= $y) {
    $case2 = $b * ($y - $x) + $c * 2 * $x;
} else {
    $case2 = $a * ($x - $y) + $c * 2 * $y;
}

if ($x <= $y) {
    $case3 = $c * 2 * $y;
} else {
    $case3 = $c * 2 * $x;
}

echo min($case1, $case2, $case3);