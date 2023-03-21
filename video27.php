<?php

/* ARRAYS  */
// -- Array_Chunk -- //
function PrintArray(array $value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
$items = ['a' => 1 , 'b' => 2 , 'c' => 3 , 'd' => 4 , 'e' => 5];
PrintArray(array_chunk($items, 2 , true));
echo '<hr>';

// -- Array_Combine -- //
$array1 = ['a' , 'b' , 'c'];
$array2 = [5 , 10 , 15];
PrintArray(array_combine($array1 , $array2));
echo '<hr>';

// -- Array_Filter -- //
$array = [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10];
$even = array_filter($array , fn($number , $keys) => $number % 2 == 0 , ARRAY_FILTER_USE_BOTH);
$even = array_values($even);
PrintArray($even);
echo '<hr>';

// -- Array_Keys -- //
$array_for_keys = ['a' => 5 , 'b' => 10 , 'c' => 15 , 'd' => 5 , 'e' => 10];
$keys = array_keys($array_for_keys , 10);
PrintArray($keys);
echo '<hr>';

// -- Array_Map -- //
$array_for_map = [1 , 2 , 3 , 4 , 5];
$array_for_map = array_map(fn($number) => $number * 3 , $array_for_map);
PrintArray($array_for_map);
echo '<hr>';

// -- Array_Search -- //
$array_for_search = ['a','b','c','D','E','ab','bc','cd','b','d'];
$key = array_search('b',$array_for_search);
var_dump($key);
echo '<hr>';

// -- Array_Diffrences -- //
$array1_diff = ['a' => 1 , 'b' => 2 , 'c' => 3 , 'd' => 4 , 'e' => 5];
$array2_diff = ['f' => 4 , 'g' => 5 , 'i' => 6 , 'j' => 7 , 'k' => 8];
$array3_diff = ['l' => 3 , 'm' => 9 , 'n' => 10];
PrintArray(array_diff($array1_diff , $array2_diff , $array3_diff));
PrintArray(array_diff_assoc($array1_diff , $array2_diff , $array3_diff));
echo '<hr>';


?>