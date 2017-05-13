<?php
list($A, $B, $K, $L) = explode(" ", trim(fgets(STDIN)));

echo floor($K / $L) * $B + min($B,(($K % $L) * $A)); 