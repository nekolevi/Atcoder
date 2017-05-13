<?php
$N = trim(fgets(STDIN));

for ($i = 0; $i <= $N - 1; $i++) {
    $c[] = trim(fgets(STDIN));
}
$d = $c;
sort($d);

$fc = array_flip($c);
$fd = array_flip($d);

$sum = 0;
foreach($fc as $k => $v){
    if($v % 2 != $fd[$k] % 2){
        $sum++;
    };
}

echo ceil($sum / 2);
