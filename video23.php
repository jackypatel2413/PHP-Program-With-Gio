<?php
// -- Passsing Argument by value -- //
echo 'Passsing Argument by value : <br>';
function foo( int|float $a , int|float $b): int|float{
    if ($a%2==0) {
        $a/=2;
    }
    return $a * $b ;
}

$x = 6.0;
$y = 7;

echo foo($x,$y).'<br>';
var_dump($x,$y);

echo '<hr>';


// -- Passsing Argument by Reference -- //
echo 'Passsing Argument by Reference : <br>';
function too( int|float &$c , int|float $d): int|float{
    if ($c%2==0) {
        $c/=2;
    }
    return $c * $d ;
}

$q = 6.0;
$w = 7;

echo too($q,$w).'<br>';
var_dump($q,$w);

echo '<hr>';

// -- Variadic Function -- //
echo 'Variadic Function : <br>';
function summ(...$numbers):int|float{
    $sum = 0 ;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum ;
}

echo summ(50,100,25,5);
echo '<hr>';

// -- Variadic Function With In-built Function -- //
echo 'Variadic Function With In-built Function : <br>';
function su(...$numbers):int|float{
    return array_sum($numbers);
}

echo su(50,10,25,5);
echo '<hr>';



?>