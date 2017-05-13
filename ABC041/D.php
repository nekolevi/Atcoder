<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));

//複数行の標準入力を1,1から始まる2次元配列にする
function Ain11($cnt = 0)
{
    $a = [];
    if(!$cnt) {
        for ($i = 1; $j = fgets(STDIN); $i++) {
            $a[$i] = array_merge([0], explode(" ", trim($j)));
            unset($a[$i][0]);
        }
    }else {
        for ($i = 1; $i <= $cnt; $i++) {
            $a[$i] = array_merge([0], explode(" ", trim(fgets(STDIN))));
            unset($a[$i][0]);
        }
    }
    return $a;
}

$r = Ain11($M);

if ($N <= 8){
    $array = range(pow(10,$N - 1), pow(10,$N - 1) -1);

    foreach($array as $key => $num){
        $numArray =str_split($num);
        if ($numArray != array_unique($numArray)) {
            unset($array[$key]);
            continue;
        }
        foreach($r as $rr){
            if (array_search($rr[1], $numArray) > array_search($rr[2], $numArray)){
                unset ($array[$key]);
            }
        }
    }

    echo count($array);
}
