<?php

function tableau()
{
    $tab = array("1","1","1","1","1","1","1","1","1");
    foreach ($tab as $value) {
        $input = readline("type a value : ");
        $value += $input;
    }
}
tableau();