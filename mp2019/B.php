<?php
$a = explode(" ", trim(fgets(STDIN)));
$a = array_merge($a, explode(" ", trim(fgets(STDIN))));
$a = array_merge($a, explode(" ", trim(fgets(STDIN))));

$b = array_count_values($a);

if (count($b) != 4) {
    echo "NO\n";
} else {
    $c = array_count_values($b);

    if ($c[1] == 2 && $c[2] == 2) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
}