<?php
$N = trim(fgets(STDIN));
$a=[];
for($i = 0; $i <= $N - 1; $i++){
    $a[] = trim(fgets(STDIN));
}
$b = array_unique($a);

sort($b);
$c = array_flip($b);

for($i = 0; $i <= $N - 1; $i++){
    echo $c[$a[$i]] . "\n";
}
