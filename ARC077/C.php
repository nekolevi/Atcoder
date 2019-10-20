<?php
list($H, $W) = explode(" ", trim(fgets(STDIN)));

if($H % 3 == 0 || $W % 3 == 0){
    echo 0;
} else {
    $L = max($H,$W);
    $S = min($H,$W);

    $BIG = ceil($L / 3)  * $S;
    $SMALL = floor($S / 2) * ($L - ceil($L / 3));

    echo $BIG - $SMALL;
}
