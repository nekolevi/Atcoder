<?php
$strs = array_count_values(str_split(trim(fgets(STDIN)))) + ['N' => 0, 'S' => 0, 'W' => 0, 'E' => 0];

if (($strs['N'] != 0 && $strs['S'] == 0)
    || ($strs['S'] != 0 && $strs['N'] == 0)
    || ($strs['E'] != 0 && $strs['W'] == 0)
    || ($strs['W'] != 0 && $strs['E'] == 0)
) {
    echo 'No';
} else {
    echo 'Yes';
}