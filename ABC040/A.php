<?php
list($n, $x) = explode(" ", trim(fgets(STDIN)));
echo min($x-1,$n-$x);