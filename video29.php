<?php

/* ERROR HANDLING */
// -- User_Error -- //
// trigger_error('Example Error',E_USER_ERROR);
// echo 1;

// -- User_Warning -- //
echo 'User Warning';
trigger_error("Example Error",E_USER_WARNING);
echo 1 . '<br><hr>';

// -- Parse  Error -- //
echo 'Error Handler <br>';
function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
){
    echo $type . ': ' . $msg . ' in ' , $file . ' on line ' . $line;
    
    exit;
}
error_reporting(E_ALL & ~E_WARNING);
set_error_handler('errorHandler' , E_ALL);
echo $x;

?>