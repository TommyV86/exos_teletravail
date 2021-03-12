<?php

$a = readline("enter the 1st number: ");
$b = readline("enter the 2nd number: ");
$c = $a + $b;

    if ($c > 0 ) 
        echo "this product is positive";
        
    elseif ($c == 0) 
        echo "this product is 0";
    
    else
        echo "this product is negative";