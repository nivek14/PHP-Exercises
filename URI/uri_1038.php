<?php

    $line = explode(" ", fgets(STDIN));

    $id     = (int)$line[0];
    $quant  = (int)$line[1];
    $total  = 0;

    switch($id){
        case 1:
            $total = number_format($quant * 4.00,2,'.',"");
            break;
        case 2:
            $total = number_format($quant * 4.50,2,'.',"");
            break;
        case 3:
            $total = number_format($quant * 5.00,2,'.',"");
            break;  
        case 4:
            $total = number_format($quant * 2.00,2,'.',"");
            break;
        case 5:
            $total = number_format($quant * 1.50,2,'.',"");
            break;
    }

    echo "Total: R$ $total\n";