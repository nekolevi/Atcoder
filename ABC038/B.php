<?php
$HW1 = explode(" ", trim(fgets(STDIN)));
$HW2 = explode(" ", trim(fgets(STDIN)));
$flg = false;

foreach ($HW1 as $l){
    if (in_array($l, $HW2)){
        echo 'YES';
        $flg = true;
        break;
    }
}

if(!$flg){
    echo 'NO';
}
