<?php
list($A, $B) = explode(" ", fgets(STDIN));

if($B % $A == 0) {
    echo (int)($B / $A);
} else {
    echo (int)($B / $A) + 1;
}
