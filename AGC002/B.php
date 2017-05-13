<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));
$red = [1 => 1];
$count = array_fill(1, $N ,1);

While ($str = trim(fgets(STDIN))) {
    $xy = explode(" ", $str);
    $count[$xy[0]]--;
    $count[$xy[1]]++;

    if(array_key_exists($xy[0], $red)) {
        $red[$xy[0]] = $count[$xy[0]];
        $red[$xy[1]] = $count[$xy[1]];

        if ($red[$xy[0]] == 0) {
            unset($red[$xy[0]]);
        }
    }
}

echo count($red);

