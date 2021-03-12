<?php

    $inputHour = readline("enter an hour :");
    $inputMin = readline("enter min :");
    $inputSec = readline("enter sec :");

    function future($x,$y,$z) {
        $hourMax = 23;
        $minMax = 59;
        $secMax = 59;

        if($z >= $secMax && $y >= $minMax && $x >= $hourMax){
            $x = 0;
            $y = 0;
            $z = 0;
        } elseif($z >= $secMax && $y >= $minMax) {
            $z = 0;
            $y = 0;
            $x += 1;
        } elseif($z >= $secMax) {
                $z = 0;
                $y += 1;
            } else
                $z += 1;

        echo "dans une seconde, il sera ". $x . " heures " . $y . " min " . $z . " secondes ";
    }      
    
    future($inputHour,$inputMin,$inputSec);