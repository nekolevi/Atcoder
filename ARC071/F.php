<?php
$S = trim(fgets(STDIN));
$pattern = '/(.).?\1/';

preg_match($pattern, $S, $matches, PREG_OFFSET_CAPTURE);

if(!isset($matches[0])){
    echo('-1 -1');
}else {
    echo $matches[0][0];
    echo ($matches[0][1] + 1) . ' ' . ($matches[0][1] + strlen($matches[0][0]));
}
