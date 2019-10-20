<?php
$n = trim(fgets(STDIN));
$d=[];
for ($i=0;$i <= $n - 1; $i++){
    $d[] = trim(fgets(STDIN));
}

echo count(array_unique($d)) . "\n";
