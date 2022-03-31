<?php

    $line = explode(" ", fgets(STDIN));

    $sort = sort($line);

    print_r($line,true);

    echo "\n\n";

    print_r($sort,true);
 