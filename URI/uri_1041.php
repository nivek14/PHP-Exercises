<?php

    $line = explode(" ", fgets(STDIN));
    $x = (double)$line[0];
    $y = (double)$line[1];

    if(($x > 0 && $y > 0) || ($x >= 0 && $y > 0) || ($x > 0 && $y >= 0))        echo "Q1\n";
    else if(($x < 0 && $y > 0) || ($x <= 0 && $y > 0) || ($x < 0 && $y >= 0))   echo "Q2\n";
    else if(($x < 0 && $y < 0) || ($x <= 0 && $y < 0) || ($x < 0 && $y <= 0))   echo "Q3\n";
    else if(($x > 0 && $y < 0) || ($x >= 0 && $y < 0) || ($x > 0 && $y <= 0))   echo "Q4\n";
    else echo "Origem\n";