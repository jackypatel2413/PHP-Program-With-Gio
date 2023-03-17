<?php

/* MATCH Expression */
echo 'Match Expression : <br>';

$PaymentStatus = 2;

match($PaymentStatus){
    1 => print 'Paid',
    2 => print 'Payment Declined',
    3 => print 'Pending Payment'
}


?>