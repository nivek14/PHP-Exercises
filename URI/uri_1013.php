<?php

    $line = explode(" ", fgets(STDIN));

    $a = (int)$line[0];
    $b = (int)$line[1];
    $c = (int)$line[2];

    $maiorAB = (($a + $b + abs($a - $b)) / 2);
    $maiorVal = (($maiorAB + $c + abs($maiorAB - $c)) / 2);

    echo "$maiorVal eh o maior\n";