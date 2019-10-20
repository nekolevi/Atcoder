<?php
list ($N, $K) = explode(" ", trim(fgets(STDIN)));

if ($N % 2 == 1) {
    $N++;
}

echo ($N / 2 >= $K ? 'YES' : 'NO') . "\n";