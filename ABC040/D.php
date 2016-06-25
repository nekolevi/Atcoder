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
$Q = trim(fgets(STDIN));

$m = Ain11($Q);

