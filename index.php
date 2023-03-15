<?php
/*
    Basic Sytex :

echo 'Hello World';
print 'Hello World';
echo print 'Hello World';
echo 'Joe\'s Invoice';
*/

/*  
    Varrieble

$name = 'Gio';
echo $name;
*/

/*
    Varriebles Assigning by Value

$x=1;
$y=$x;

$x=3;
echo $y;
*/

/*
    Varriebles Assigning by Reberence

$x=1;
$y=&$x;

$x=3;
echo $y;
*/

/*
    Varrieble Within Text

 $firstname = 'Gio';
 echo"Hello {$firstname}";
*/

?>

<!-- 
    PHP in HTML

<!DOCTYPE html>
<html>
    <body>
    
        <h1>
            <?= 'Hello World'?>
        </h1>
        <p>My first paragraph</p>
    
    </body>
</html>
 -->

<!-- 
    PHP in HTML

<!DOCTYPE html>
<html>
    <body>
    
        <h1>
            <?= 'Hello World'?>
        </h1>
        <?php
            /*
            $x = 10;
            $y = 5;
            
            echo '<P>' . $x .',' . $y . '</p>';
            */
        ?>
    </body>
</html> -->

<?php
/*
    CONSTANT using define

define('STATUS_PAID','paid');
echo STATUS_PAID;
*/

/*
    CONSTANT using const 

const STATUS_PAID = 'paid';
echo STATUS_PAID;
*/

/*
    Pre-define CONSTANT

echo PHP_VERSION;
*/

/*
    Magic CONSTANT

echo __LINE__;
echo __FILE__;
*/

/*
    Varriable Varriables

$foo = 'bar';
$$foo ='baz';

echo $foo , ${$foo};
*/

/*
    Data Types 

    #bool - true / false
    $completed = true;

    #int - 1,2,3,-5(no decimal)
    $score = 75;
    
    #float - 1.1 ,3.5 ,-5.5
    $price = 5.9;
    
    #string - "Hello world"
    $greeting = "Hello";

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';
    
    #array
    $companies = [ 1, 2, 3, -9.2 ,'A' ,'B' ,true];
    print_r($companies);
*/

/*
    Type Juggling

function sum(int $x , int $y){
    var_dump($x,$y);
    return $x+$y;
}
$sum = sum(2.5,'4');
echo $sum
*/

/*
    Type Casting
    
$x = (int)'5';
var_dump($x);
*/

/*
    Null

$x = null;
var_dump(is_null($x));
*/

/*

*/
?>