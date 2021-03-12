<?php

function tableau()
{
    $stock = 0;
    $tab = array();
    for ($i = 0; $i < 5; $i++) {
        
        $input = readline("enter a number : ");
        $stock += $input;
        $tab[] = $stock;
    }
    print_r($tab);
}
    
tableau();