<?php 
function reverseArray($arr){
    $newArr = [];
    foreach($arr as $value){
        array_unshift($newArr, $value);
    }
    return $newArr;
}

function doReverse(){
    $array1 = [5,12,54,76,23,15,12,54,9];
    $array2 = [9,8,32,56,89,16,32,89,76];
    echo '<pre>';
    echo '<h1>Reverse Array</h1>';
    echo 'Array 1:<br>';
    print_r($array1);
    echo 'Reversed Array 1:<br>';
    print_r(reverseArray($array1));
    echo 'Array 2:<br>';
    print_r($array2);
    echo 'Reversed Array 2:<br>';
    print_r(reverseArray($array2));
    echo '</pre>';
}
?>