<?php
list($N, $L) = explode(" ", trim(fgets(STDIN)));
$a = array_merge([0], explode(" ", trim(fgets(STDIN))));;

$last = false;
for($i = 1; $i <= $N - 1; $i++){
    if($L <= $a[$i] + $a[$i + 1]){
        $last = $i;
        break;
    }
}
if(!$last){
    echo 'Impossible' . "\n";
}else{
    echo 'Possible' . "\n";
    for($i = $N - 1; $last < $i; $i--){
        echo $i . "\n";
    }
    for($i = 1; $i < $last; $i++){
        echo $i . "\n";
    }
    echo $last . "\n";
}

