<?php


function tableau()
{

    $tab = array();
    for ($i = 0; $i < 5; $i++) {
        $greaterNumb = 0;
        $input = readline("enter a number : ");
        $tab[] = $input;
        for ($j = 1; $j < 5; $j++) {
            if ($tab[$i] > $tab[$j] - 1) {
                $greaterNumb += $tab[$i];
            }
        }
    }

    print_r($tab);
    echo "\n";
    echo $greaterNumb;
}

tableau();
