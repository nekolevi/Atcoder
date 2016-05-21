<?php
list($L, $X, $Y, $S, $D) = explode(" ", trim(fgets(STDIN)));

if ($S == $D) {
    echo 0 . "\n";
} else {
    if ($S <= $D) {
        if ($Y > $X) {
            echo sprintf('%.15f', min(($D - $S) / ($Y + $X), ($L - ($D - $S)) / ($Y - $X))). "\n";
        } else {
            echo sprintf('%.15f', ($D - $S) / ($Y + $X)). "\n";
        }
    } else {
        if ($Y > $X) {
            echo sprintf('%.15f', min(($S - $D) / ($Y - $X), ($L - ($S - $D)) / ($Y + $X))). "\n";
        } else {
            echo sprintf('%.15f', ($L - ($S - $D)) / ($Y + $X)). "\n";
        }
    }
}
