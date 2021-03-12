<?php 

    function sumIntegers () {
        $num = readline("enter a number : ");
        $result1 = 1;
        $result2 = 0;
        for($i = 0; $i < $num; $i++){
            $result1 += $i;
            $result2 = $result1 + $i;
            
        }
        echo $result2;
    }

    sumIntegers();