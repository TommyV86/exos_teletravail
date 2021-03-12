<?php

    function number(){
        
        do {
            $numb = readline ("try again : ");
        } while ($numb > 3 || $numb < 1);
    }

    number();