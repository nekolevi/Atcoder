<?php
list($n, $c) = explode(" ", trim(fgets(STDIN)));

While ($str = trim(fgets(STDIN))) {
    list($x, $v) = explode(" ", $str);
    $X[] = $x;
    $rX[] = $c - $x;
    $V[] = $v;
}

$rV = array_reverse($V);

$A[0] = (int)$V[0];
for ($i = 1; $i <= $n - 1; $i++) {

    $A[$i] = $V[$i] + $A[$i - 1];
}

$B[0] = (int)$rV[0];
for ($i = 1; $i <= $n - 1; $i++) {

    $B[$i] = $rV[$i] + $B[$i - 1];
}

var_dump($A);
var_dump($B);

for ($i = 1; $i <= $n - 1; $i++) {

    $C[$i] = $A[$i] - $X[$i];
    $D[$i] = $A[$i] - 2*$X[$i];
    $E[$i] = $B[$i] - $rX[$i];
    $F[$i] = $B[$i] - 2*$rX[$i];
}

