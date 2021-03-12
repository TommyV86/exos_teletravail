<?php 

    $age = readline("enter a number :");

    if($age >= 12)
        echo "Cadet";
    elseif($age >= 11)
        echo "Minime";
    elseif($age >= 8)
        echo "Pupille";
    elseif($age >= 6) 
        echo "Poussin";