<?php

    $askAge = readline("enter an age: ");
    $askGenre = readline("enter a genre: ");

    function zorlub($numb,$str) {
        $homme = "male";
        $femme = "female";

        $isMaleImposable = $numb > 20 && $str == $homme;
        $isFemaleNotImposable = $numb > 18 && $numb < 35 && $str == $femme;
        $othersNotImposable = $numb < 18;
        
        if($isMaleImposable) {
            echo "imposable";
        } elseif($isFemaleNotImposable) {
            echo "not imposable";
        } elseif ($othersNotImposable) {
            echo "the others aren't imposable";
        }
    }

    zorlub($askAge,$askGenre);