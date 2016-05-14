<?php
list($N, $Q) = explode(" ", trim(fgets(STDIN)));

$board = array_fill(1, $N + 1, 0);

for ($i = 1;$i <= $Q; $i++)  {
    list($s, $e) = explode(" ", trim(fgets(STDIN)));
    $board[$s]++;
    $board[$e + 1]--;
}

echo $board[1] % 2;
for ($i = 1; $i <= $N - 1; $i++) {
    $board[$i + 1] = $board[$i] + $board[$i + 1];
    echo $board[$i + 1] % 2;
}

echo PHP_EOL;