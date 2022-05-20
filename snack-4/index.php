<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numbers = [];


for($i = 0; $i<16; $i++){
    $rand = rand(0,100);
    if(!in_array($rand, $numbers)){
        array_push($numbers, $rand);
    }
}

var_dump($numbers);

?>