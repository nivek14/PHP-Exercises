<?php

    $salary = (double)readline();

    if      ($salary >= 0 && $salary <= 400.00){
        $b = $salary * 0.15;
        number_format($salary += $b,2,'.',"");
        echo "Novo salario: $";
    }
    #else if ($salary >= 400.01 && $salary <= 80.00)     $salary += $salary * 0.12;
    #else if ($salary >= 800.01 && $salary <= 1200.00)   $salary += $salary * 0.10;
    #else if ($salary >= 1200.01 && $salary <= 2000.00)  $salary += $salary * 0.07;
    #else                                                $salary += $salary * 0.04;