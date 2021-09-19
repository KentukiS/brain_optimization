<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$matrix1 = array(
    array(
       0,1,-22
    ),
    array(
       1,2,9 
    ),
   array(
       2,3,0 
    ),
   array(
       -4,0,11 
    )
);


$matrix2 = array(
    array(
       2,-8,2
   ),
    array(
       0,2,2 
    ),
    array(
       4,0,2 
    ),
    array(
       5,2,2 
    )
);


 echo "<pre>";
function matrixFlip($matrix) {
    $result = array();
    foreach ($matrix as $key => $array) {
        foreach ($array as $arrayKey => $arrayValue) {
            $result[$arrayKey][$key] = $arrayValue;
        }
    }
    return $result;
}
$matrixReverse = matrixFlip($matrix1); // Mystery function
// var_dump($matrixReverse );


function matrixSumm($matrix1,$matrix2){
    $result = array();
    $line = count($matrix1);
    $row = count($matrix2[0]);
    for ($i=0; $line > $i; $i++) {
        for ($j=0; $row > $j ; $j++) { 
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}
$matrixSumm = matrixSumm($matrix1,$matrix2);
// var_dump($matrixSumm);

function deleteNegativLine($matrix){
    $result = array();
    foreach($matrix as $key => $array){
        if(in_array(0, $array) && array_sum($array) > 0){
        } else {
            $result[] = $array;
        } 
    }
    return $result;
}
$matrixDelete = deleteNegativLine($matrix1);
// var_dump($matrixDelete);

function deleteNegativRow($matrix){
    $matrix = matrixFlip($matrix);
    $matrix = deleteNegativLine($matrix);
    $matrix = matrixFlip($matrix);
    return $matrix;
}
$matrixDeleteRow = deleteNegativRow($matrix2);
var_dump($matrixDeleteRow);

?>