<?php
list($A, $B) = explode(" ", trim(fgets(STDIN)));

if ($A == $B) {
    echo $A * 2 . "\n";
} elseif ($A < $B) {
    echo $B * 2 - 1  . "\n";
} else {
    echo $A * 2 - 1 . "\n";
}

