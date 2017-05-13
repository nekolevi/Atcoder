<?php
list($N, $L) = explode(" ", trim(fgets(STDIN)));

for($i=1; $i <= $N; $i++){
    $S[$i] = trim(fgets(STDIN));
}
natsort($S);
echo implode('',$S);