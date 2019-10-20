<?php
list($N, $K) = explode(" ", trim(fgets(STDIN)));

While ($str = trim(fgets(STDIN))) {
    list($a, $b, $c) = explode(" ", $str);

    $E[$a][] = [$b, $c];

}

$paths = [[[1], 0]];
$w = [];

for ($i = 1; $i <= $N; $i++){
    var_dump($paths);
    foreach ($paths as $key => $path) {
        $v = $path[0][count($path[0]) - 1];

        foreach (isset($E[$v]) ? $E[$v] : [] as $e) {

            if (in_array($e[0], $path[0])) {
                echo 'inf';
                exit;
            } else {
                $tasu = [$path[0] + [$e[0]],$path[1] + $e[1]] ;

                if ($e[0] == $N) {
                    $w[] = $tasu[1];
                }

                $paths = $paths + $tasu;
            }
        }
    }
}

echo max($w);