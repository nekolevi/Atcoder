<?php
$S = str_split(trim(fgets(STDIN)));
$count = count($S);
$sum = 0;
for ($i = 0; $i < $count; $i++) {
    if ($S[$i] == 'U') {
        $sum += ($count - $i - 1) + 2 * $i;
    } else {
        $sum += 2 * ($count - $i - 1) + $i;
    }
}

echo $sum;