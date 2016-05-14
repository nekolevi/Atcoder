<?php

list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
echo floor($C / min($A,$B));