<?php

    $num = (double)readline();

    if($num >= 0 && $num <= 25)         echo "Intervalo [0,25]\n";
    else if($num > 25 && $num <= 50)    echo "Intervalo (25,50]\n";
    else if($num > 50 && $num <= 75)    echo "Intervalo (50,75]\n";
    else if($num > 75 && $num <= 100)   echo "Intervalo (75,100]\n";
    else                                echo "Fora de intervalo\n";
