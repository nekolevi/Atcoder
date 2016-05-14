<?php
list($W, $H) = explode(" ", fgets(STDIN));
if ($W / 4 == $H / 3) {
    echo '4:3' . "\n";
} else {
    echo '16:9' . "\n";
}