<?php

function tableau()
{
    $tab = array(1=>"a",2=>"e",3=>"i",4=>"o",5=>"u",6=>"y");
    for($i = 1; $i < count($tab) + 1; $i++){
        echo($tab[$i]);
    }
}
tableau();