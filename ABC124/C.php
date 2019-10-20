<?php
$S = str_split(trim(fgets(STDIN)));

$a = [];
$b = [];

$cnt = count($S);

for ($i = 0; $i <= $cnt - 1; $i++) {
    if ($i % 2 == 0) {
        $a[] = '1';
        $b[] = '0';
    } else {
        $a[] = '0';
        $b[] = '1';
    }
}

echo min(count(array_diff_assoc($S, $a)), count(array_diff_assoc($S, $b))) . "\n";
