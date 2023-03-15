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
    Array

$programmingLanguages = ['PHP','Java','Python'];
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';
echo count($programmingLanguages);*/

/*
    Add Elements in Array

$programmingLanguages = ['PHP','Java','Python'];
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';
echo count($programmingLanguages);

$programmingLanguages[]='C++';
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';
echo count($programmingLanguages);
*/

/*
    Add multiple elements using array_push
    
$programmingLanguages = ['PHP','Java','Python'];
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';
echo count($programmingLanguages);

array_push($programmingLanguages , 'C++' , 'C');
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';
echo count($programmingLanguages);
*/

/*
    Name keys in array

$programmingLanguages=[
    'php' => '8.0',
    'python' => '3.9'
];
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';

echo $programmingLanguages['php'];
*/

/*
    Multi-dimensional arrays

$programmingLanguages=[
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8,'releaseDate' => 'Nov 26,2020'],
            ['version' => 7.4,'releaseDate' => 'Nov 28,2019']
        ]
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9,'releaseDate' => 'Oct 5,2020'],
            ['version' => 3.8,'releaseDate' => 'Oct 14,2019']
        ]
    ]
];
echo'<pre>';
print_r($programmingLanguages);
echo'<pre>';

echo $programmingLanguages['php']['website'];
*/

/*
    Removing element from the end

$array = ['a','b','c','d','e'];
array_pop($array);
echo'<pre>';
print_r($array);
echo'<pre>';
*/

/*
    Removing element from the beginning

$array = ['a','b','c','d','e'];
array_shift($array);
echo'<pre>';
print_r($array);
echo'<pre>';
*/

/*
    Removing element by key

$array = ['a','b','c','d','e'];
unset($array[2]);
echo'<pre>';
print_r($array);
echo'<pre>';
*/

/*
    casting to Array

$x = 'foo';
var_dump((array) $x);
*/

?>