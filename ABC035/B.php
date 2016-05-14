<?php
$S = str_split(trim(fgets(STDIN)));
$T = trim(fgets(STDIN));

$count = array_count_values($S);

$known_move = abs($count['L'] - $count['R']) + abs($count['U'] - $count['D']) ;
$unknown_move = $count['?'];

$maxl = $known_move + $unknown_move;

$minl = 0;

if($known_move >= $unknown_move){
    $minl = $known_move - $unknown_move;
}else{
    $minl = ($unknown_move - $known_move) % 2 == 0 ? 0 : 1;
}


if ($T == 1){
    echo $maxl . "\n";
}else{
    echo $minl . "\n";
}