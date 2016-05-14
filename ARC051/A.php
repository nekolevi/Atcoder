<?php
list($x1, $y1, $r) = explode(" ", fgets(STDIN));
list($x2, $y2, $x3, $y3) = explode(" ", fgets(STDIN));

//□の中に○が入っている場合
//両方□として考えてよい

if($x2 <= $x1-$r && $x1+$r <= $x3 && $y2 <= $y1 - $r && $y1 + $r <= $y3){
    echo "NO\n";
}else{
    echo "YES\n";
}

//○の中に□が入ってる場合
//中心から□の4頂点までの距離がr以下

if(sqrt(($x2 - $x1) * ($x2 - $x1) + ($y2 - $y1) * ($y2 - $y1)) <= $r
    && sqrt(($x2 - $x1) * ($x2 - $x1) + ($y3 - $y1) * ($y3 - $y1)) <= $r
    && sqrt(($x3 - $x1) * ($x3 - $x1) + ($y2 - $y1) * ($y2 - $y1)) <= $r
    && sqrt(($x3 - $x1) * ($x3 - $x1) + ($y3 - $y1) * ($y2 - $y1)) <= $r){
    echo "NO\n";
}else{
    echo "YES\n";
}