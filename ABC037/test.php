<?php
echo "1000 900\n";
foreach(range(1,1000) as $val){
    foreach(range(1,900) as $val2){
        echo rand(1,1000000000) . " ";
    }
    echo "\n";
}