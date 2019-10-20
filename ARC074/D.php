<?php
list($N, $W) = explode(" ", trim(fgets(STDIN)));

While ($str = trim(fgets(STDIN))) {
    $wv[] = explode(" ", $str);
}

$memo = [];
$max = 0;

function dp($i, $maxW)
{
    global $N, $wv, $memo;

    if (isset($memo[$i][$maxW])) {
        return $memo[$i][$maxW];
    }

    if ($i == $N) {
        $max = 0;
    } else if ($maxW < $wv[$i][0]) {
        $max = dp($i + 1, $maxW);
    } else {
        $max = max(
            dp($i + 1, $maxW),
            dp($i + 1, $maxW - $wv[$i][0]) + $wv[$i][1]
        );
    }

    $memo[$i][$maxW] = $max;
    return $max;
}

echo dp(0, $W);