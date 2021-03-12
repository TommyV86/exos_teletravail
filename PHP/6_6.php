<?php

function tableau()
{
    $tab = array(1, 1, 1, 1, 1, 1, 1);
    $tab[0] = 3;
    $tab[1] = 4;
    print_r($tab);

    for($i = 2; $i < 7; $i++) {
        $tab[$i] = $tab[$i-1] + $tab[$i-2];
    }
    for($i = 0; $i < 7; $i++) {
        echo $tab[$i];
    }
}
tableau();