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

        if ($arr[$i] == ($arr[$i + 1]) - 1) {
            return "it's consecutive";
        } else {
            return "it's not consecutive";
        }
    }
}

tableau();