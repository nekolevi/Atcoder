<?php
fscanf(STDIN, '%d%d', $H, $W);

$a = [];

for($i = 0; $i < $H; ++$i) {
    $a[] = explode(' ', fgets(STDIN));
    foreach($a[$i] as &$val){
        $val += 0;
    }
}

$memo = [];
for($i = 0; $i < $H; ++$i){
    $memo[$i] = array_fill(0, $W, 0);
}

function dfs($i, $j){
    global $memo, $a, $H, $W;
    if($memo[$i][$j] === 0){
        $num = 1;
        $n = $a[$i][$j];
        if($i < $H - 1 && $a[$i + 1][$j] > $n){
            $num += dfs($i + 1, $j);
        }
        if($j < $W - 1 && $a[$i][$j + 1] > $n){
            $num += dfs($i, $j + 1);
        }
        if(0 < $i && $a[$i - 1][$j] > $n){
            $num += dfs($i - 1, $j);
        }
        if(0 < $j && $a[$i][$j - 1] > $n){
            $num += dfs($i, $j - 1);
        }
        $memo[$i][$j] = $num ;
    }
    return $memo[$i][$j];
}

$sum = 0;
for($i = 0; $i < $H; ++$i){
    for($j = 0; $j < $W; ++$j){
        $sum += dfs($i, $j) % 1000000007;
    }
}

echo $sum;