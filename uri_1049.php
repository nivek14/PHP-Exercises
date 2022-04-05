<?php

    $word1 = (string)readline();
    $word2 = (string)readline();
    $word3 = (string)readline();

    if($word1 == "vertebrado"){
        if($word2 == "ave"){
            if($word3 == "carnivoro")       echo "aguia\n";
            else if($word3 == "onivoro")    echo "pomba\n";
        }
        else if($word2 == "mamifero"){
            if($word3 == "onivoro")         echo "homem\n";
            else if($word3 == "herbivoro")  echo "vaca\n";
        }
    }
    else if($word1 == "invertebrado"){
        if($word2 == "inseto"){
            if($word3 == "hematofago")      echo "pulga\n";
            else if($word3 == "herbivoro")  echo "lagarta\n";
        }
        else if($word2 == "anelideo"){
            if($word3 == "hematofago")      echo "sanguessuga\n";
            else if($word3 == "onivoro")    echo "minhoca\n";
        }
    }
