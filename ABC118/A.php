<?php
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));

if ($A <= $C && $C <= $B) {
    echo "Yes";
} else {
    echo "No";
}
