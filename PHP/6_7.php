<?php
function tableau()
{
    $tab = array("1","1","1");
    $stock = 0;
    for($i = 0; $i < count($tab); $i++) {
        $input = readline("type a value : ");
        $stock += $input;
    }
    echo $stock;
}
tableau();