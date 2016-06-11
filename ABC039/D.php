<?php
list($H, $W) = explode(" ", trim(fgets(STDIN)));

$a = [];

for ($i = 1; $j = fgets(STDIN); $i++) {
    $a[$i] = array_merge([0], str_split(trim($j)));
    unset($a[$i][0]);
}
$vec = [[0,0],[0,1],[1,0],[1,1],[0,-1],[-1,0],[-1,1],[1,-1],[-1,-1]];

for ($i = 1; $i <= $H; ++$i) {
    $memo[$i] = array_fill(1, $W, '.');
}

for($i = 1; $i <= $H; $i++){
    for($j = 1;$j <= $W; $j++){
        if($a[$i][$j] == '#') {
            foreach ($vec as $v) {
                if (isset($a[$i + $v[0]][$j + $v[1]]) && check($i + $v[0], $j + $v[1]) == true) {
                    $memo[$i + $v[0]][$j + $v[1]] = '#';
                    break;
                }

                if ($v == [-1, -1]) {
                    echo 'impossible';
                    exit();
                }
            }
        }
    }
}

function check($i, $j){
    global $a;
    global $vec;

    foreach($vec as $v){
        if(isset($a[$i+$v[0]][$j+$v[1]]) && $a[$i+$v[0]][$j+$v[1]] == '.')
        return false;
    }
    return true;
}

echo "possible\n";
foreach($memo as $value){
    echo implode($value) . "\n";
}