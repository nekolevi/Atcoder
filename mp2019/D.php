<?php
$L = trim(fgets(STDIN));
$ans = 0;
$stack = 0;

$a = [2];

for ($i = 1; $i <= $L; $i++) {
    $tmp = trim(fgets(STDIN));

    $a[$i] = $tmp;
}

echo dp($L) . "\n";

function dp($i)
{

    global $a;
    global $stack;

    if ($i == 1) {
        switch ($a[1]) {
            case 0:
                return 0;
            case $a[1] % 2 == 0:
                return 1;
            case $a[1] % 2 == 1:
                return 0;
            default:
                break;
        }
    } else {
        switch ($a[$i]) {
            case 0:
                $stack++;
                return dp($i - 1);
            case $a[$i] % 2 == 0:
                if ($stack < $a[$i]) {
                    $tmp = $stack;
                    $stack = 0;
                    return dp($i - 1) + $tmp + 1;
                } else {
                    $stack ++;
                    return dp($i - 1) + $a[$i];
                }

            case $a[$i] % 2 == 1:
                if ($stack < $a[$i]) {
                    $tmp = $stack;
                    $stack = 0;
                    return dp($i - 1) + $tmp;
                } else {
                    return dp($i - 1) + $a[$i];
                }
            default:
                break;
        }
    }
}

