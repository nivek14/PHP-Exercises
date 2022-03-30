<?php

    $n = 3.14159;
    $r = (double)readline();
    $a = number_format($n * pow($r,2),4,'.', "");
    echo "A=$a\n";