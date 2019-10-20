<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));

$da = floor(($a - 1) / 33) + 1;
$ma = ($a - 1) % 33;

$db = floor(($b - 1) / 33) + 1;
$md = ($b - 1) % 33;

$h = ($da + $db) * 3;
$w = 100;

$b = [];

for ($i = 1; $i <= $da; $i++) {
    $b[3 * $i - 2] = array_fill(0, 100, '#');
    $b[3 * $i - 1] = array_fill(0, 100, '#');
    $b[3 * $i - 0] = array_fill(0, 100, '#');

    if ($i != $da) {
        for ($j = 1; $j <= 33; $j++) {
            $b[3 * $i - 1][3 * $j - 1] = '.';
        }
    } else {
        for ($j = 1; $j <= $ma; $j++) {
            $b[3 * $i - 1][3 * $j - 1] = '.';
        }
    }
}

for ($i = 1; $i <= $db; $i++) {
    $b[3 * $da + 3 * $i - 2] = array_fill(0, 100, '.');
    $b[3 * $da + 3 * $i - 1] = array_fill(0, 100, '.');
    $b[3 * $da + 3 * $i - 0] = array_fill(0, 100, '.');

    if ($i != $db) {
        for ($j = 1; $j <= 33; $j++) {
            $b[3 * $da + 3 * $i - 1][3 * $j - 1] = '#';
        }
    } else {
        for ($j = 1; $j <= $md; $j++) {
            $b[3 * $da + 3 * $i - 1][3 * $j - 1] = '#';
        }
    }
}

echo $h . " " . $w . "\n";
foreach ($b as $v) {
    echo(implode($v) . "\n");

}
