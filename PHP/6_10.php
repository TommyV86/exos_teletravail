<?php

function transfertAndAddTabs()
{
    $tab1 = array(1, 2, 5, 5, 4);
    $tab2 = array(2, 4, 8, 7, 1);
    $tab3 = array();

    for ($i = 0; $i < 5; $i++) {
        $tab3[] = $tab1[$i] + $tab2[$i];
    }
    print_r($tab3);
}


transfertAndAddTabs();