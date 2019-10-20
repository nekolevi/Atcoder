<?php
/**
 * 汎用binary_search
 *
 * @param array $haystack ソートされた配列
 * @param $start_index - 検索対象の配列のfirst index
 * @param $end_index - 検索対象の配列のlast index
 * @param $needle - 検索したい値
 * @param callable $value_compare_func - ユーザー定義の比較関数(usort参照）
 * @return int　- 見つかったキーのindex or  -(keyより大きい最小の要素のindex + 1)
 */
function binary_search(array $haystack, $start_index, $end_index, $needle, callable $value_compare_func)
{
    $low = $start_index;
    $hi = $end_index - 1;

    while ($low <= $hi) {
        $mid = (int)(($hi - $low) / 2) + $low;
        $compare = call_user_func($value_compare_func, $haystack[$mid], $needle);

        if ($compare < 0) {
            $low = $mid + 1;
        } elseif ($compare > 0) {
            $hi = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -($low + 1);
}

$asc = [2, 4, 6, 8, 10, 12, 14];

//存在する要素
$idx1 = binary_search($asc, 0, sizeof($asc), 6, function ($a, $b) {
    return ($a <=> $b);
});

//存在しない要素
$idx2 = binary_search($asc, 0, sizeof($asc), 5, function ($a, $b) {
    return ($a <=> $b);
});
echo $idx1 . "\n";  //2 →　asc[2]=6である。
echo $idx2 . "\n";  //-3 →　asc[2] が5より大きい最大の要素である。（0の時に区別できないので-1されている。）

$desc = [14, 12, 10, 8, 6, 4, 2];

$idx3 = binary_search($desc, 0, sizeof($desc), 6, function ($a, $b) {
    return -($a <=> $b);
});

echo $idx3 . "\n";  //4 →　desc[4]=6である。
