<?php
function tierce()
{
    $nmbreChP = readline("type horses numbers : ");
    $nmbreChJ = readline("type horses played : ");
    $x = 1;
    $np = $nmbreChP - $nmbreChJ;
    $factP = 1;
    for ($i = 1; $i < $np; $i++){
        $x = $x * ($np + $i);
        $factP = $factP * $i;
    }
    $y = $x / $factP;
    echo "In order, one chance on ". $x . " to win \n";
    echo "In disorder, one chance on ". $y . " to win";
}

tierce();
