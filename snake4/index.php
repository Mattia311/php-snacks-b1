<?php
/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/
$random=[];
for($i=0; $i<16; $i++){
    $numbers[]=rand(0,100)."<br />";
    if(!in_array($numbers,$random)) {
        $random[]= $numbers;
    }
}
print_r($numbers);

?>