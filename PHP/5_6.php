<?php

function factory(){
    $nombre = readline("Veuillez saisir un nombre : ");
    $i = 0;
    $result = 0;
    $result2 = 1;

    for($i = 1; $i < $nombre; $i++ ) {
        $result = $i + 1; 
        $result2 = $result2 * $result;

    }
    echo $result2;
}

factory();