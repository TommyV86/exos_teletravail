<?php 

    function display10Numbers() {
        $count = 0;
        $numb = readline("enter a number : ");
        
        for($i = 1; $i < 11; $i++){
            $count = $numb + 1; 
            $numb = $count;
            echo $numb;
        }
    }

    display10Numbers();