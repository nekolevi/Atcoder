<?php
$N = trim(fgets(STDIN));
$L = explode(" ", trim(fgets(STDIN)));

$nums = array_count_values($L);
$sum = 0;
$lefts = [];
foreach ($nums as $key => $val) {
    $sum += $key * floor($val / 2);
    if ($val % 2 == 1) {
        $lefts[] = $key;
    }
}

sort($lefts);
for ($i = 0; $i < count($lefts); $i++) {
    if ($i % 2 == 0) {
        $sum += $lefts[$i];
    }
}
echo $sum;