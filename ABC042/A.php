<?php
$N = explode(" ", trim(fgets(STDIN)));
sort($N);
if($N == [5,5,7]){
    echo 'YES';
}else{
    echo 'NO';
}