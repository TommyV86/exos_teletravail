<?php

function tableau()
{
    $tab = array();
    for ($i = 0; $i < 5; $i++) {

        $input = readline("enter a number : ");
        $tab[] = $input;
    }
    print_r($tab);
}
    
tableau();