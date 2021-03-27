<?php

function tableau()
{
    $tab = [];
    $inputNberCases = readline("type numbers tab cases : ");
    for ($i = 0; $i < $inputNberCases; $i++) {
        $tab[$i] = readline("enter a value : ");
    }
    echo isConsecutiveOrNot($tab);
}

function isConsecutiveOrNot($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $isConsec = $arr[$i] == ($arr[$i + 1]) - 1;
        if (!$isConsec) {
            return "it's not consecutive";
        }       
    }
    echo "it's consecutive";
}

tableau();