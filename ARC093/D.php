<?php
$N = trim(fgets(STDIN));
$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));

$ans = 0;
for ($i = 0; $i <= 29; $i++) {
    $T = pow(2, $i);

    for ($j = 0; $j < $N; $j++) {
        $dp[$j] = $b[$j] % $T;
    }
    sort(dp, dp+n);
    int ret = 0, val, x, y, cnt = 0;
    for (int i = 0; i < n; i++) {
        val = a[i] % base;
        x = max(0, (1<<s) - val);
        y = base - 1 - val;
        if (x <= y) {
            cnt += upper_bound(dp, dp+n, y) - lower_bound(dp, dp+n, x);
        }
        x = (base+(1<<s)) - val;
        y = (1<<(s+2))-1 - val;
        if (x <= y) {
            cnt += upper_bound(dp, dp+n, y) - lower_bound(dp, dp+n, x);
        }
        cnt = cnt % 2;
    }


}