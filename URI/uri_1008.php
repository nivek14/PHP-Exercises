<?php

    $id     = (int)readline();
    $hours  = (int)readline();
    $money  = (double)readline();
    $salary = number_format($hours * $money,2,'.',"");
    echo "NUMBER = $id\n";
    echo "SALARY = U$ $salary\n";