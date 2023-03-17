<?php

/* Return / Declare  Statements */
// -- Return Statement -- //
echo 'Return Statement : <br>';
function sum(int $a , int $b){
    $c = $a + $b;
    return $c;
}
$d = sum(5 , 10);
echo $d ;

echo'<hr>';

// -- Declare Statement -- //
echo 'Declare Statement : <br>';
function onTick(){
    echo'Tick<br>';
}
register_tick_function('onTick');

declare(ticks=3);
$e = 0;
$lenght = 10;
while ($e < $lenght) {
    echo $e++ . '<br>';
}

?>