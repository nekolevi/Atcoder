<?php
$N = trim(fgets(STDIN));

$a = array_merge([0], explode(" ", trim(fgets(STDIN))));
unset($a[0]);

arsort($a);

foreach($a as $key =>$val){
    echo $key . "\n";
}
