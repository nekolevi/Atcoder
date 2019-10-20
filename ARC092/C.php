<?php
$N = trim(fgets(STDIN));
$p = [];
for ($i = 0; $i <= $N * 2 - 1; $i++) {
    $p[] = explode(' ', trim(fgets(STDIN))) + [2 => $i < $N ? 'r' : 'b'];
}
array_multisort(array_column($p, 0), SORT_ASC, $p);
$rs = [];
$count = 0;

for ($i = 0; $i <= 2 * $N - 1; $i++) {
    if ($p[$i][2] == 'r') {
        $rs[] = $p[$i];
    }
    if ($p[$i][2] == 'b') {
        array_multisort(array_column($rs, 1), SORT_DESC, $rs);
        foreach ($rs as $k => $r){
            if ($p[$i][1] > $r[1]) {
                $count++;
                unset($rs[$k]);
                break;
            }
        }
    }
}

echo $count;