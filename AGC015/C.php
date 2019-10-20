<?php
$N = trim(fgets(STDIN));
$A = explode(" ", trim(fgets(STDIN)));

$eq = true;

for ($i = 0; $i < $N; $i++) {
    if ($i == 0 || ($up && $A[$i - 1] > $A[$i]) || (!$up && $A[$i - 1] < $A[$i])) {
        if (!$eq) {
            $count++;
        }

        if (isset($A[$i + 1])) {
            $up = $A[$i] < $A[$i + 1];
            $eq = $A[$i] == $A[$i + 1];
        }
    }

}

echo $count;
