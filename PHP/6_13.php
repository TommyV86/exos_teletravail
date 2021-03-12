<?php


function tableau()
{
    $tab = [];
    
    $inputTabBoxes = readline("enter boxes number : ");
    $tab[] = $inputTabBoxes;
    for ($i = 0; $i < $inputTabBoxes; $i++) {
        $inputNumbInBoxes = readline("enter a number : ");
        $tab[$i] = $inputNumbInBoxes;
    }
    print_r($tab);
    echo tabCompare($tab);
}

function tabCompare($arr){
    $greaterNumb = 0;
    for ($j = 0; $j < count($arr); $j++) {
        if ($arr[$j] > $arr[0]){
            $arr[0] = $arr[$j];
            $greaterNumb = $arr[$j];
        }
    }
    echo $greaterNumb;
}

tableau();
