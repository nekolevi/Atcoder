<?php
$N = trim(fgets(STDIN));

While ($str = trim(fgets(STDIN))) {
    $xy = explode(" ", $str);
    $R[]= max($xy);
    $B[] =min($xy);
}

echo (max($R) - min($R)) * (max($B) - min($B));
