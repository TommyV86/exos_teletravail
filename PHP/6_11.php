<?php

function MultiplyTabs()
{   
    
    $tab1 = array(4, 8, 7, 12);
    $tab2 = array(3, 6);
    $tab3 = array();
    $stock = 0;
    $addStock = 0;

    for ($i = 0; $i < count($tab2); $i++) {
        for ($j = 0; $j < count($tab1); $j++) {
            $stock = $tab1[$j] * $tab2[$i];
            $addStock += $stock + $stock[$i];
            $tab3[] = $stock;
        }
    }
    print_r($tab3);
    echo $addStock;
}

MultiplyTabs();