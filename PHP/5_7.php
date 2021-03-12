<?php

function grandNumb()
{

    $nombreMax = 0;

    for ($i = 1; $i <= 5; $i++) {
        $nombre = readline("Veuillez insérer un nombre : ");

        if ($nombre > $nombreMax) {
            $nombreMax = $nombre;
        }
    }
    echo "Le plus grand nombre est " . $nombreMax;
}
grandNumb();
