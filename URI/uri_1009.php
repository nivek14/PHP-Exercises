<?php

    $name   = (string)readline();
    $salary = (double)readline();
    $bonus  = (double)readline();

    $total = number_format($salary + ($bonus * 0.15),2,'.',"");

    echo "TOTAL = R$ $total\n";