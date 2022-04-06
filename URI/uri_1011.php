<?php

    $raio = (double)readline();

    $volume = number_format((4.0/3) * 3.14159 * pow($raio,3),3,'.',"");

    echo "VOLUME = $volume\n";
