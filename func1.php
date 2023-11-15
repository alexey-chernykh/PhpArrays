<?php
function unifyArray($arr){
    $newArr = [];
    foreach($arr as $value){
        if(array_search($value, $newArr) === false){
            array_push($newArr, $value);
        }
    }
    return $newArr;
}

function doUnify(){
    $array1 = [5,12,54,76,23,15,12,54,9];
    $array2 = [9,8,32,56,89,16,32,89,76];
    echo '<pre>';
    echo '<h1>Unify Array</h1>';
    echo 'Array 1 before unify:<br>';
    print_r($array1);
    $array1 = unifyArray($array1);
    echo 'Array 1 after unify:<br>';
    print_r($array1);
    echo 'Array 2 before unify:<br>';
    print_r($array2);
    $array2 = unifyArray($array2);
    echo 'Array 2 after unify:<br>';
    print_r($array2);
    echo '</pre>';
}
?>
