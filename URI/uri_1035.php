<?php

    $line = explode(" ", fgets(STDIN));

    if( $line[1] > $line[2] &&
        $line[3] > $line[0] &&
        $line[2] + $line[3] > $line[0] + $line[1] &&
        $line[2] > 0 &&
        $line[3] > 0 &&
        $line[0] % 2 == 0) echo "Valores aceitos\n";
    else echo "Valores nao aceitos\n";