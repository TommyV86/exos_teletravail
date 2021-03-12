<?php

    $photoNumbers = readline("enter the photocopies number: ");

    function repography($x){
        $price1 = 0.10;
        $price2 = 0.09;
        $price3 = 0.08;

        if($x <= 10){
            $multiplyPrice1 = $price1 * $x;
            echo "the photocopies of price is ". $multiplyPrice1 . "€";
        } elseif($x <= 20){
            $multiplyPrice2 = $price2 * $x;
            echo "the photocopies of price is ". $multiplyPrice2 . "€";
        } else {
            $multiplyPrice3 = $price3 * $x;
            echo "the photocopies of price is ". $multiplyPrice3 . "€";
        }
    }

    repography($photoNumbers);