<?php
$S = trim(fgets(STDIN));

if (preg_match("/^.*keyence$/",$S)
    || preg_match("/^k.*eyence$/",$S)
    || preg_match("/^ke.*yence$/",$S)
    || preg_match("/^key.*ence$/",$S)
    || preg_match("/^keye.*nce$/",$S)
    || preg_match("/^keyen.*ce$/",$S)
    || preg_match("/^keyenc.*e$/",$S)
    || preg_match("/^keyence.*$/",$S)

){
    echo ("YES") . "\n";
}else{
    echo("NO") . "\n";
}