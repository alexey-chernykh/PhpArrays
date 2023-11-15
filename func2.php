<?php 
function countDublicatesArray($arr){
    $find = array_count_values($arr);
    $newArr = [];
    foreach($find as $key => $value){
        if($value > 1){
            array_push($newArr, "value: $key, count: $value");
        }
    }
    return $newArr;
}

function doCountDublicates(){
    $array1 = [5,12,54,76,23,15,12,54,9];
    $array2 = [9,8,32,56,89,16,32,89,76];
    echo '<pre>';
    echo '<h1>Count Dublicates in Array</h1>';
    echo 'Array 1:<br>';
    print_r($array1);
    $array1 = countDublicatesArray($array1);
    echo 'Array 1 count dublicates:<br>';
    print_r($array1);
    echo 'Array 2:<br>';
    print_r($array2);
    $array2 = countDublicatesArray($array2);
    echo 'Array 2 count dublicates:<br>';
    print_r($array2);
    echo '</pre>';
}
?>