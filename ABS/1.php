<?php
$a =trim(fgets(STDIN));
list($b,$c) = explode(" ", trim(fgets(STDIN)));
$s =trim(fgets(STDIN));
echo ($a + $b + $c) . " " . $s . "\n";