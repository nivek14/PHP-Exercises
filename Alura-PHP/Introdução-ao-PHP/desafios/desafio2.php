<?php

    $value = (int)readline();

    for($i=1;$i<10;$i++){
        $calc = $i * $value;
        echo "$i x $value = $calc" . PHP_EOL;
    }