<?php

    $b = "the number is positive";
    $c = "the number is negative";

    $a = readline("enter a number: " );
    if ($a > 0) 
        echo $b;
        
    elseif ($a == 0) 
        echo "the number is 0";
    
    else
        echo $c;