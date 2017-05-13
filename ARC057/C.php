<?php
$num = trim(fgets(STDIN));

//BCmath使えないので
$str1 = exec('ruby -e "puts ' . $num . '*' . $num . '"');
$str2 = exec('ruby -e "puts (' . $num . ' + 1) * (' . $num . ' + 1)"');

$i = 0;
while(true) {
    if ($str2[$i] == 0 && $str1[$i] == 9) {
        echo substr($str2, 0, $i - 1);
        break;
    }
    $i++;
}

