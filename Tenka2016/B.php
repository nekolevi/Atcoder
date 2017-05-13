<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));

for($i = 1; $i <= $N-1; $i++){
    $P[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i <= $M - 1; $i++) {
    list($B[$i], $M[$i]) = trim(fgets(STDIN));
}

foreach($P as $child => $parent){
    $w[$child] = getWeight($child,$parent);
}

