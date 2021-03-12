<?php

    function number(){
        
        do {

            $numb = readline ("Enter a number : ");

            if($numb > 20) { 
                echo "Plus petit ! ";
            } elseif($numb < 10) {
                echo "Plus grand ! ";
            }

        } while ($numb > 20 || $numb < 10);
    }
    number();