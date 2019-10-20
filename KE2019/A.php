<?php
$n = explode(" ", trim(fgets(STDIN)));

asort($n);
$nn = array_values($n);

if ($nn[0] == 1 && $nn[1] == 4 && $nn[2] == 7 && $nn[3] == 9) {
    echo "YES\n";
} else {
    echo "NO\n";
}