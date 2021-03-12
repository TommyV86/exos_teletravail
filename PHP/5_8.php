<?php

function grandNumb()
{
    do {
        $nombre = readline("Veuillez insérer un nombre : ");
    }
    while($nombre != 0);
}

grandNumb();