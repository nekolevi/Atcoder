<?php
$S = trim(fgets(STDIN));
$As = str_split($S);
$all = count($As);
$num = array_count_values($As);
$odd = 0;

foreach($num as $v){
    if ($v % 2 == 1)
    {
        $odd++;
    }
}

if($odd == 0){
    echo $all;
}else{
    echo floor(($all - $odd) / ($odd * 2)) * 2 + 1;
}
