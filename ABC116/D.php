<?php
list($N, $K) = explode(" ", trim(fgets(STDIN)));

While ($str = trim(fgets(STDIN))) {
    $td = explode(" ", $str);

}

function solver($n, $k, $s)
{
    global $td;

    if ($n == 0 || $s == 0) {
        return [0, $td];
    }

    $res = solver($n - 1, $k, $s - 1);

}

$max = 0;
for ($i = 1; $i <= $S; $i++) {
    $tmp = solver($N, $K, $i);
    if ($max < $tmp) {
        $max = $tmp;
    }
}