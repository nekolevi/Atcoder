<?php
for ($i = 1; $i <= 100; $i++){
    $arr[] = rand(-100,100);
}
echo implode(' ', $arr);

