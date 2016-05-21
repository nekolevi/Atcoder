<?php
$a = 1;
$b = 1;
$N = trim(fgets(STDIN));

for($i = 1; $i<=$N; $i++){
    list($a,$b) = [$b + $a, $a];
}

echo ("$a $b");