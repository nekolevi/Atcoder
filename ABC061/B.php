<?php
$w = str_split(trim(fgets(STDIN)));
$count = array_count_values($w);

foreach ($count as $cnt) {
    if ($cnt % 2 != 0) {
        echo 'No';
        die;
    } else {

    }
}
echo 'Yes';
