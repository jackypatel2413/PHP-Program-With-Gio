<?php

/* DATE & TIME */
date_default_timezone_set('Asia/Kolkata');
// -- Time -- //
echo 'Time : ';
$currentTime = time();
echo $currentTime;
echo '<br> Time after 5 days : ';
echo $currentTime + 5 * 24 * 60 * 60 ;
echo '<br> Time before one day : ';
echo $currentTime - 60 * 60 * 24;
echo '<hr>';

// -- Date -- //
echo 'date : ';
echo date('d/m/Y g:ia').'<br>';

echo 'date after 5 days : ';
echo date('d/m/Y g:ia' , $currentTime + 5 * 24 * 60 * 60).'<br>';

echo 'date of yesterday : ';
echo date('d/m/Y g:ia' , $currentTime - 60 * 60 * 24).'<br>';

?>