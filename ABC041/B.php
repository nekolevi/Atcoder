<?php
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));

$num = pow(10,9) + 7;

echo ((($A * $B) % $num) * $C) % $num;