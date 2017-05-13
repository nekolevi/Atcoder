<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));

if (0 < $a) {
    echo 'Positive';
} elseif ($a * $b <= 0){
    echo 'Zero';
} else {
    if(($b - $a + 1) % 2 == 1 || $a == $b){
        echo 'Negative';
    } else {
        echo 'Positive';
    }
}