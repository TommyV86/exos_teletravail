<?php

function tableau()
{
    $tab = [];
    $inputNberCases = readline("type numbers tab cases : ");
    for ($i = 0; $i < $inputNberCases; $i++) {
        $tab[$i] = readline("enter a value : ");
    }
    echo triTab($tab);
}

function triTab($arr){
    $numAftGreater = 0;
    $yaPermut = true;
    while($yaPermut){ 
        $yaPermut = false;
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] < ($arr[$i+1])){
            $numAftGreater = $arr[$i];
            $arr[$i] = $arr[$i+1];
            $arr[$i+1] = $numAftGreater;
            $yaPermut = true;
        }
    }
}
    print_r($arr);
}

tableau();