<?php
$N = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));

for($i = 1; $i <= $N-1; $i++){
    $b[] = ($a[$i] - $a[$i - 1]);
}

//offsetエラー回避
$b[$N - 1] = 0;
$b[-1] = 0;

$memo = '';
foreach($b as $key => $val){
    if($key === $memo){
        continue;
    }
    if ($val < 0){
        if($b[$key - 1] >=0 || $b[$key - 1] >=0) {

            if ($b[$key - 1] > $b[$key + 1]) {
                $c[$key - 1] = $b[$key - 1] + $val;
            } else {
                $c[$key] = $b[$key + 1] + $val;
                $memo = $key + 1;
            }
        }else{
            $c[$key] = $val;
        }
    }else{
        $c[$key] = $val;
    }
}

$sum = 0;
foreach($c as $val){
    $sum += abs($val);
}

echo $sum;
