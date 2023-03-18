<?php

/* VARIEABLE SCOPES */
// -- Global Scope -- //
echo 'Globle Scope : <br>';
$x = 5;
include('script1.php');
echo'<br>';
echo $x;
echo '<hr>';

// -- Global Scope using Global Keyword -- //
echo 'Global Scope using Global Keyword : <br>';
$a = 7 ;
function one(){
    global $a;
    $a=10;
    echo $a;
}
one();
echo'<br>';
echo'<hr>';

// -- Global Scope using Global Array -- //
echo 'Global Scope using Global Array : <br>';
$b = 7;
function three(){
    echo $GLOBALS['b'];
}
three();
echo '<br>';
echo '<hr>';

// -- Local Scope -- //
echo 'Local Scope : <br>';
$y=5;
function two($y){
    echo $y;
}

two($y);

?>