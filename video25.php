<?php

/* VARIABLE , ANONYMOUS & ARROW FUNCTIOIN */
// -- Variable Function -- //
echo 'Variable Function : <br>';
function sum(int|float ...$numbers):int|float{
    return array_sum($numbers);
}
$x = 'sum';
echo $x(1 , 2 , 3 , 4);
echo '<hr>';

// -- Anonymous Function -- //
echo 'Anonymous Function : <br>';
$sum = function (int|float ...$numbers): int|float{
    return array_sum($numbers);
};
echo $sum(10,20,30);
echo '<hr>';

// -- Arrow Function -- //
echo 'Arrow Function : <br>';
$array = [1 , 2 , 3 , 4];
$array2 = array_map(fn($number) => $number * $number ,$array);
echo '<pre>';
print_r($array2);
echo '</pre>';
echo '<hr>';

?>