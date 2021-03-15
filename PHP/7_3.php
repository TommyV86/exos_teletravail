<?php

function reverse()
{
    
    $tab = [92, 56, 89, 54, 23, 25, 48, 79];
    $negativeIndex = count($tab) - 1;
        for ($i = 0; $i < count($tab) / 2; $i++) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$negativeIndex];
            $tab[$negativeIndex] = $temp;
            $negativeIndex--;
        }
    print_r($tab);
}


reverse();
