<?php
list($N, $K) = explode(" ", trim(fgets(STDIN)));
$D = explode(" ", trim(fgets(STDIN)));

for($i = $N; $i <= 99999; $i++){
    foreach($D as $num){
        if (strpos($i, $num) !== false){
            continue 2;
        }
    }
    echo $i;
    break;
}
