<?php

    $tempo = (int)readline();
    $media = (int)readline();

    $litros = number_format(($tempo * $media) / 12,3,'.',"");

    echo "$litros\n";