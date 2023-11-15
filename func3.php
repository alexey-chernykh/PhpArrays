<?php 
function expandUniqueArray($arr1, $arr2){
    $find = array_count_values(array_merge($arr1, $arr2));
    $newArr = [];
    foreach($find as $key => $value){
        if($value < 2){
            array_push($newArr, $key);
        }
    }
    return $newArr;
}

function doExpandUnique(){
    $array1 = [5,12,54,76,23,15,12,54,9];
    $array2 = [9,8,32,56,89,16,32,89,76];
    echo '<pre>';
    echo '<h1>Unite 2 Arrays with Unique Values</h1>';
    echo 'Array 1:<br>';
    print_r($array1);
    echo 'Array 2:<br>';
    print_r($array2);
    echo 'Expanded Unique Array:<br>';
    print_r(expandUniqueArray($array1, $array2));
    echo '</pre>';
}
?>