<?php
list($N, $M) = explode(" ", trim(fgets(STDIN)));

$v = [];
While ($str = trim(fgets(STDIN))) {
    $v = array_merge($v, explode(" ", $str));
}

$cnt = array_count_values($v);
ksort($cnt);

for($i=1; $i <= $N; $i++){
    echo (isset($cnt[$i]) ? $cnt[$i] : 0) . "\n";
}
