<?php
/* OPERATORS - part 2 */
// -- Error Operators -- //
$a = @file('foo.txt');

// -- Increment/Decrement Operators -- //

echo 'Increment/Decrement Operators';
echo'<br>';
echo'<br>';

$b = 5;

echo'Post Increment'.'<br>';
echo $b++;
echo'<br>';
echo $b;
echo'<br>';
echo'<br>';

echo'Pre Increment'.'<br>';
echo ++$b;
echo'<br>';
echo $b;
echo'<br>';
echo'<br>';

echo'Post Decrement'.'<br>';
echo $b--;
echo'<br>';
echo $b;
echo'<br>';
echo'<br>';

echo'Pre Decrement'.'<br>';
echo --$b;
echo'<br>';
echo $b;
echo'<br>';
echo'<br>';
echo'<hr>';


// -- Logical Operators -- //

echo 'Logical Operators';
echo'<br>';
echo'<br>';

$c = true;
$d = false;

echo'And operator : ';
var_dump($c && $d);
echo'<br>';

echo'Or operator : ';
var_dump($c || $d);
echo'<br>';

echo'Unary operator : ';
var_dump(!$c || $d);
echo'<br>';
echo'<br>';
echo'<hr>';


// -- Bitwise Operators -- //

echo 'Bitwise Operators';
echo'<br>';
echo'<br>';

$e = 6;
$f = 3;

echo'And operator : ';
var_dump($e & $f);
echo'<br>';

echo'Or operator : ';
var_dump($e | $f);
echo'<br>';

echo'Zor operator : ';
var_dump($e ^ $f);
echo'<br>';

echo'Negation operator : ';
var_dump(~$e & $f);
echo'<br>';

echo'Shifts bit left operator : ';
var_dump($e << $f);
echo'<br>';

echo'Shifts bit right operator : ';
var_dump($e >> $f);
echo'<br>';
echo'<br>';
echo'<hr>';


// -- Array Operators -- //

echo 'Array Operators';
echo'<br>';
echo'<br>';

$g = ['a','b','c'];
$h = ['d','e','f','g'];

$i=$g+$h;
echo'Union of array : ';
print_r($i);
echo'<br>';

$j= $g == $h;
echo'Comparison of array : ';
var_dump($j);
echo'<br>';

$k= $g === $h;
echo'Strict Comparison of array : ';
var_dump($k);
echo'<br>';
echo'<br>';
echo'<hr>';

?>