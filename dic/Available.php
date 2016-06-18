<?php

//1行を取得して変数に入れる
list($x1, $x2, $x3, $x4) = explode(" ", trim(fgets(STDIN)));
echo "$x1 $x2 $x3 $x4 \n";

//10の9乗+7
$num = pow(10,9) + 7;

//時刻測定用
$startTime = microtime(true);
$cRap = 0;

function eRap()
{
    global $startTime, $cRap;
    $cRap++;
    echo "rap$cRap:" . floor((microtime(true) - $startTime) * 1000) . "(ms)\n";
}

//複数行の標準入力を2次元配列にする
function Ain($cnt = 0)
{
    if(!$cnt) {
        While ($str = trim(fgets(STDIN))) {
            $a[] = explode(" ", $str);
        }
    }else{
        for ($i = 0; $i <= $cnt - 1; $i++) {
            $a[] = explode(" ", trim(fgets(STDIN)));
        }
    }
    return $a;
}

//複数行の標準入力を1,1から始まる2次元配列にする
function Ain11($cnt = 0)
{
    $a = [];
    if(!$cnt) {
        for ($i = 1; $j = fgets(STDIN); $i++) {
            $a[$i] = array_merge([0], explode(" ", trim($j)));
            unset($a[$i][0]);
        }
    }else {
        for ($i = 1; $i <= $cnt; $i++) {
            $a[$i] = array_merge([0], explode(" ", trim(fgets(STDIN))));
            unset($a[$i][0]);
        }
    }
    return $a;
}

//全部同じ数字で初期化した配列
function Afill($W, $H, $num = 0)
{
    for ($i = 0; $i < $H; ++$i) {
        $a[] = array_fill(0, $W, $num);
    }
    return $a;
}

//全部同じ数字で初期化した配列 1,1から
function Afill11($W, $H, $num = 0)
{
    for ($i = 1; $i <= $H; ++$i) {
        $a[$i] = array_fill(1, $W, $num);
    }
    return $a;
}

//00開始の配列を11開始にした配列を返す
function Aconv($a)
{
    $b = [];
    foreach($a as $k => $v){
        $b[$k + 1] = array_merge([0], $v);
        unset($b[$k + 1][0]);
    }
    return $b;
}

//9方向
$vec = [[0,0],[0,1],[0,-1],[1,0],[1,1],[1,-1],[-1,0],[-1,1],[-1,-1]];

//8方向
$vec = [[0,1],[0,-1],[1,0],[1,1],[1,-1],[-1,0],[-1,1],[-1,-1]];

//2次元ループのサンプル

$W = 10;
$H = 8;
$brd = Afill11($W, $H);

for($i = 1; $i <= $H; $i++){
    for($j = 1;$j <= $W; $j++){
        echo $brd[$i][$j] ;
    }
    echo "\n";
}

//配列にいれた結果を出力

foreach($brd as $value){
    echo implode($value) . "\n";
}

//ヒープ

$heap = new SplMinHeap;

$heap->insert(2);
$heap->insert(8);
$heap->insert(7);

$out = clone $heap;

while($out->valid()){
    echo $out->extract() . "\n";
}

$heap = new SplMaxHeap;

$heap->insert(2);
$heap->insert(8);
$heap->insert(7);

$out = clone $heap;

while($out->valid()){
    echo $out->extract() . "\n";
}

//優先度付きキュー

$pq = new SplPriorityQueue();

$pq->insert('A',2);
$pq->insert('B',8);
$pq->insert('C',7);

$out = clone $pq;

while($out->valid()){
    echo $out->extract() . "\n";
}
//優先度付きキュー　昇順
class AdjustablePriorityQueue extends SplPriorityQueue {

    protected $direction='desc';

    function compare($priority1,$priority2){
        if($this->direction=='asc') return parent::compare($priority2, $priority1);
        return parent::compare($priority1,$priority2);
    }

    function setDirection($direction){
        $this->direction = $direction;
    }
}

$pq = new AdjustablePriorityQueue();
$pq->setDirection('asc');

$pq->insert('A',2);
$pq->insert('B',8);
$pq->insert('C',7);

$out = clone $pq;

while($out->valid()){
    echo $out->extract() . "\n";
}