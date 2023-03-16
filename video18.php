<?php

/* SWITCH Statement */
echo 'Switch Statement : <br>';

$PaymentStatus = 'paid';

switch ($PaymentStatus) {
    case 'paid':
        echo 'Paid';
        break;
    
    case 'declined':
        echo 'Payment Declined';
        break;

    case 'pending':
        echo 'Payment Pending';
        break;

    default:
        echo ' Unknown Payment Status';
        break;
}

echo '<br><hr>';
/* SWITCH Statement within loops*/
echo 'Switch Statement within loops : <br>';

$PaymentStatuses = [1 , 3 , 0];
foreach ($PaymentStatuses as $Payment) {
        
    switch ($Payment) {
        case 1:
            echo 'Paid';
            break;
        
        case 2:
        case 3:
            echo 'Payment Declined';
            break;

        case 0:
            echo 'Payment Pending';
            break;

        default:
            echo ' Unknown Payment Status';
            break;
    }
    echo '<br>';
}
echo'<hr>';

?>