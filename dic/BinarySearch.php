
function binary_search(array $a, $first, $last, $key, $compare) {
$lo = $first;
$hi = $last - 1;

while ($lo <= $hi) {
$mid = (int)(($hi - $lo) / 2) + $lo;
$cmp = call_user_func($compare, $a[$mid], $key);

if ($cmp < 0) {
$lo = $mid + 1;
} elseif ($cmp > 0) {
$hi = $mid - 1;
} else {
return $mid;
}
}
return -($lo + 1);
}