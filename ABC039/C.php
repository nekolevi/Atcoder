<?php
$S = trim(fgets(STDIN));

$key = ['Do','Re','Mi','Fa','So','La','Si'];
$value = ['WBWBWWBWBWBW','WBWWBWBWBWWB','WWBWBWBWWBWB','WBWBWBWWBWBW','WBWBWWBWBWWB','WBWWBWBWWBWB','WWBWBWWBWBWB'];

$white = array_combine($key, $value);

$c = substr($S, 0, 12);

foreach ($white as $key =>$value){
    if($value == $c){
        echo $key;
    }
}