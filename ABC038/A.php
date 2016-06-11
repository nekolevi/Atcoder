<?php
$S = trim(fgets(STDIN));
echo $S[strlen($S) - 1] == 'T' ? 'YES' : 'NO';