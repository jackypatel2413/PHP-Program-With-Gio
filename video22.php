<?php

/* FUNCTIONS */

echo 'Functions : <br>';
function a(){
    echo 'Hello World';
}
a();
echo '<hr>';

// -- Functions With Conditions -- //
echo 'Declaring Functions Conditionally : <br>';
if(true){
    function b(){
        return 'Hello World';
    }
}
var_dump(b());
echo '<hr>';

// -- Function Within Function -- //
echo 'Functions Within Function : <br>';
c();
d();
function c(){
    echo 'C <br>';
    function d(){
        echo 'D';
    }
}

echo '<hr>';




?>