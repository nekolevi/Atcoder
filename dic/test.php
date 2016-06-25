<?php
if ($handle = opendir('/home/contestant')) {
    while (false !== ($entry = readdir($handle))) {
            echo "$entry\n";
    }
    closedir($handle);
}