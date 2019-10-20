<?php
$N = trim(fgets(STDIN));

for ($i = 0; $i <= $N - 1; $i++) {
    $c[] = trim(fgets(STDIN));
}

$nums = array_count_values($c);
$snums = $nums;
$flg = false;

if(isset($nums['1'])){
    $snums['1'] = 1;
    $flg = true;
}

for($i = 2; $i <= 2154; $i++){
    if($flg && isset($nums[$i * $i * $i])){
        $snums['1'] = 0;
        $flg = false;
    }

    $di = $i * $i;
    if(!isset($nums[$i]) || !isset($nums[$di])){
        continue;
    }
    if($nums[$i] < $nums[$di]){
        $snums[$i] = 0;
    }else{
        $snums[$di] = 0;
    }
}

echo array_sum($snums);

