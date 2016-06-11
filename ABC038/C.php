<?php
$N = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));

$sum = 0;
$psum = 0;
$nowIdx = 0;
$max = $a[0];

for($i = 0; $i < $N; $i++){

    if (isset($a[$i + 1]) &&  $max < $a[$i + 1]){
        $psum += 1;
        $max = $a[$i + 1];
    } else {

        $sum += ($psum + 2) * ($psum + 1) / 2;
        $psum = 0;

        if (isset($a[$i + 1])){
            $max = $a[$i + 1];
        }
    }

}

echo $sum;
