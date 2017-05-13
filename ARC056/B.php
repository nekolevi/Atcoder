<?php
list($N, $M, $S) = explode(" ", trim(fgets(STDIN)));

While ($str = trim(fgets(STDIN))) {
    $a = explode(" ", $str);

    $r[min($a[0],$a[1])][] = max($a[0],$a[1]);
}
$memo = [];

for($i = 1; $i <= $S ; $i++){
    if(canMove($i, $S)){
        echo $i . "\n";
    }
}

function canMove($i, $S){
    global $r;
    global $memo;

    if($i == $S){
        return true;
    }
    
    if($i > $S){
        return false;
    }

    if (in_array($i, $memo)){
        return true;
    }

    if(!isset($r[$i])){
        return false;
    }
    
    if (in_array($S, $r[$i])){
        return true;
    }
    
    foreach($r[$i] as $val){
        if (canMove($val,$S)){
            $memo[] = $val;
            return true;
        }
    }
    
    return false;
}