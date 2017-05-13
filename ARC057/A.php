<?php
list($A, $K) = explode(" ", trim(fgets(STDIN)));

if($K == 0){
    echo 2000000000000 - $A;
}else{
    $d = 0;
    $t = $A;
    while($t < 2000000000000){
        $t = ($K + 1) * $t + 1;
        $d++;
    }

    echo $d;
}