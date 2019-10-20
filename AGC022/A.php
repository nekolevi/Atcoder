<?php
list($N, $A, $B) = explode(" ", trim(fgets(STDIN)));

if ($A > $B || ($N == 1 && $A != $B)) {
    echo 0;
} else {
    echo(($B * ($N - 1) + $A) - ($A * ($N - 1) + $B) + 1);
}