<?php

class Scanner
{
    public $stdin = [];
    public $count = 0;
    public $pointer = 0;

    public function __construct()
    {
        $this->stdin = file('php://stdin', FILE_IGNORE_NEW_LINES);
        $this->count = count($this->stdin);
    }

    public function getLine($toArray = true)
    {
        if ($this->count == $this->pointer) {
            return false;
        }

        $this->pointer += 1;
        if ($toArray) {
            return explode(" ", $this->stdin[$this->pointer]);
        } else {
            return $this->stdin[$this->pointer];
        }
    }

}

$start = microtime();
$a = file('php://stdin', FILE_IGNORE_NEW_LINES);

//$a = new Scanner();

//    While ($str = trim(fgets(STDIN))) {
//        $a[] = $str;
//    }


echo microtime() - $start;

