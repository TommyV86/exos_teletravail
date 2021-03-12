<?php

function tableau()
{
    $tab = array(1, 1, 1, 1, 1, 1);

    for($k = 0; $k < count($tab); $k++) {
        $tab[$k] = $tab[$k-1] + 2;
    }
    for($i = 0; $i < count($tab); $i++) {
        echo $tab[$i];
    }
}
tableau();