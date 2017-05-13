<?php
$N = trim(fgets(STDIN));
$A = explode(" ", trim(fgets(STDIN)));

$count = 1;

for ($i = 0; $i < $N; $i++) {
    if ($i == 0 || $eq) {
        if (isset($A[$i + 1])) {
            $up = $A[$i] < $A[$i + 1];
            $eq = $A[$i] == $A[$i + 1];
        }
    } elseif ($up && $A[$i - 1] > $A[$i] || !$up && $A[$i - 1] < $A[$i]) {
        $count++;
        if (isset($A[$i + 1])) {
            $up = $A[$i] < $A[$i + 1];
            $eq = $A[$i] == $A[$i + 1];
        }
    }
}

echo $count;