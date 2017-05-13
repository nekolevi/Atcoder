<?php
$N = trim(fgets(STDIN));
$K = trim(fgets(STDIN));
$X = trim(fgets(STDIN));
$Y = trim(fgets(STDIN));

if($N > $K){
    $s = ($N - $K) * $Y + $K * $X;
}else{
    $s = $N * $X;
}

echo $s;
