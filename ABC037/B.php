<?php
list($N, $Q) = explode(" ", trim(fgets(STDIN)));

$arrN = array_fill(1, $N, 0);

for ($i = 1; $i <= $Q; $i++){
    list($L, $R, $T) = explode(" ", trim(fgets(STDIN)));
        for ($j = $L ; $j <= $R; $j++){
            $arrN[$j] = $T;
        }
}

echo implode("\n",$arrN);
