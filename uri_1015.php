<?php

    $first_line     = explode(" ", fgets(STDIN));
    $second_line    = explode(" ", fgets(STDIN));

    $x1 = (double)$first_line[0];
    $y1 = (double)$first_line[1];

    $x2 = (double)$second_line[0];
    $y2 = (double)$second_line[1];

    $dis = number_format(sqrt(pow($x2 - $x1,2) + pow($y2 - $y1,2)),4,'.',"");

    echo "$dis\n";