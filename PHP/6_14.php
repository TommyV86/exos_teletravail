<?php 

function classNotes(){
    $tab = [];
    $NberClassesNote = readline("type number classes notes : ");
    $tab[] = $NberClassesNote;
    for($i = 0; $i < $NberClassesNote; $i++) {
        $classesNote = readline("type a classes note : ");
        $tab[] = $classesNote;
    }
    print_r($tab);
    echo sumClass($tab);
}

function sumClass($arr){
    $sumNotes = 0;
    $average = 0;
    for($i = 0; $i < count($arr); $i++){
            $sumNotes += $arr[$i];
            $average = $sumNotes / count($arr);

        }
    echo "the classes average is " .$average;
}

classNotes();