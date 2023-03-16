<?php

/* OPERATORS */
// -- Arithmetic Operators -- //
echo "Arithmetic Operators";
echo"<br />";
echo"<br />";

$a = 10;
$b = 2;

echo "Addition : ".$a+$b;
echo"<br />";

echo "Subtraction : ".$a-$b;
echo"<br />";

echo "Multiplication : ".$a*$b;
echo"<br />";

echo "Division : ".$a/$b;
echo"<br />";

echo "Modules : ".$a%$b;
echo"<br />";

echo "Exponentiation : ".$a**$b;
echo"<br />";
echo"<br />";
echo"<hr>";

//  -- Assignment Operators -- //

echo "Assignment Operators";
echo"<br />";
echo"<br />";

$c = 5;
echo"Assignment Operator is used for assign value to varriable like c = ".$c; 

echo"<br />";
echo"<br />";
echo"<hr>";

//  -- String Operators -- //

echo "String Operators";
echo"<br />";
echo"<br />";

$d = 'Hello';
$d = $d . ' World';
echo $d;
echo"<br />";

$e = 'Hello';
$e .= ' World';
echo $e;
echo"<br />";
echo"<br />";
echo"<hr>";

//  -- Comperison Operators -- //

echo "Comperison Operators";
echo"<br />";
echo"<br />";


$f = 5;
$g = '5';

var_dump($f == $g);
echo"<br />";

var_dump($f === $g);
echo"<br />";

var_dump($f != $g);
echo"<br />";

var_dump($f !== $g);
echo"<br />";
echo"<br />";

var_dump($f < $g);
echo"<br />";

var_dump($f > $g);
echo"<br />";

var_dump($f <= $g);
echo"<br />";

var_dump($f >= $g);

echo"<br />";
echo"<br />";
echo"<hr>";

?>