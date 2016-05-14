<?php
//$counter = 0;
//
//function gcd($a, $b) {
//    if ($b == 0) return $a;
//    global $counter;
//    $counter++;
//    return gcd($b, $a%$b);
//}
//    list($a, $b) = explode(" ", fgets(STDIN));
//    $ans = gcd($a, $b);
//    echo("$counter");


$a = 1;
$b = 1;
$N = trim(fgets(STDIN));

for($i = 1; $i<=$N; $i++){
    list($a,$b) = [$b + $a, $a];
}

echo ("$a $b");