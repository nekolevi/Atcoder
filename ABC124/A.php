<?php
list($A, $B) = explode(" ", trim(fgets(STDIN)));

if ($B % $A == 0) {
    echo $A + $B . "\n";
} else {
    echo $B - $A . "\n";
}
