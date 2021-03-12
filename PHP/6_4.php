<?php


function tableau()
{

    $tab = array(1, 1, 1, 1, 1);
    for ($i = 0; $i < count($tab); $i++) {
        $result = 0;
        $tab[$i] = $i * $i;
        $result += $tab[$i];
    }
    echo $result;
}
tableau();
