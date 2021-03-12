<?php

function caisse()
{

    $prixTotal = readline("Veuillez entrer le prix à payer : ");

    $sommeApayer = readline("Veuillez entrer la somme que vous allez donner : ");

    $prixRestant = $sommeApayer - $prixTotal;

    while ($prixRestant >= 10) {
        $prixRestant = $prixRestant  - 10;
        echo "monnaie : 10€ \n ";
    }

    while ($prixRestant >= 5) {
        $prixRestant = $prixRestant  - 5;
        echo "monnaie : 5€ \n ";
    }

    while ($prixRestant >= 1) {
        $prixRestant = $prixRestant  - 1;
        echo "monnaie : 1€ \n ";
    }
}

caisse();
