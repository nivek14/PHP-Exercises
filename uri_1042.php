<?php

    $line = explode(" ", fgets(STDIN));
    $aux = $line;

    sort($line, SORT_REGULAR);
    for($i=0;$i<count($line);$i++){
        echo $line[$i];
        echo "\n";
    }

    echo "\n";

    for($i=0;$i<count($aux);$i++){
        echo $aux[$i];
        echo "\n";
    }
    