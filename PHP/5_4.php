<?php

    function multiply(){
        $numb = readline("type a number : ");

        for($i = 1; $i < 11; $i++){
            echo $numb ." x ". $i ." = ".$numb * $i." | ";
        }
    }

    multiply();