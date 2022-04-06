<?php

    $line = explode(" ", fgets(STDIN));

    $a = (double)$line[0];
    $b = (double)$line[1];
    $c = (double)$line[2];

    $delta = pow($b,2) - (4 * $a * $c);
    $div = 2 * $a;
    
    if($delta < 0 || $div == 0) echo "Impossivel calcular\n";
    else{
        $r1 = number_format((-$b + sqrt($delta)) / $div,5,'.',"");
        $r2 = number_format((-$b - sqrt($delta)) / $div,5,'.',"");
        echo "R1 = $r1\nR2 = $r2\n";
    }