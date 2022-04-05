<?php

    $line = explode(" ", fgets(STDIN));
    
    $x = (int)$line[0];
    $y = (int)$line[1];

    if(($y % $x == 0) || ($x % $y == 0)) echo "Sao Multiplos\n";
    else echo "Nao sao Multiplos\n";