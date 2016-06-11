<?php
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
echo 2 * (($A * $B) + ($B * $C) + ($C * $A));