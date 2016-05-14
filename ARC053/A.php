<?php
list($H, $W) = explode(" ", trim(fgets(STDIN)));

echo ($W - 1) * $H + $W * ($H - 1);