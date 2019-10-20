<?php
$n =trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));
$idx = $n;
$down = true;

for ($i = 1; $i <= $n; $i++) {
    $ans[] = $a[$idx - 1];
    if ($idx > 3 && $down) {
        $idx = $idx - 2;
    } elseif ($down) {
        $down = false;
        if ($idx == 3) {
            $next = 2;
        } else {
            $next = 3;
        }
        $idx = 1;
    } elseif (isset($next)) {
        $idx = $next;
        unset($next);
    } else {
        $idx = $idx + 2;
    }
}

echo implode(" ", $ans);

