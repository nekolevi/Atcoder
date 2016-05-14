<?php
$N = trim(fgets(STDIN));

for($i = 0; $i < $N; $i++){
    $S[$i] = str_split(trim(fgets(STDIN)));
}

for($i = 0; $i < $N; $i++){
    for($j = 0; $j < $N; $j++){
        $A[$i][$j] = 0;
    }
}

for($i = 0; $i < $N; $i++){
    for($j = 0; $j < $N; $j++){
        $A[$j][$N - 1 - $i] = $S[$i][$j];
    }
}

for($i = 0; $i < $N; $i++){
    echo implode($A[$i]) . "\n";
}

