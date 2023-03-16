<?php

/*  LOOPS  */
// -- While -- //
echo 'While Loop : ';
$a = 0;
while ($a <= 15) {
    echo $a++ .',';
}
echo'<hr>';

// -- Do-While -- //
echo 'Do-While Loop : ';
$b = 5;
do {
    echo $b++ . ',';
} while ($b <= 15);
echo'<hr>';

// -- For -- //
echo 'For Loop : ';
for ($c=0; $c < 15; $c++) { 
    echo $c .',';
}
echo'<hr>';

// -- Foreach -- //
echo 'Foreacch Loop : <br>';
$ProgrammingLanguages = ['php','java','c++','rust'];
foreach ($ProgrammingLanguages as $languages) {
    echo $languages .'<br>';
}
echo'<hr>';

// -- While Loop with Break Statement -- //
echo 'While Loop with Break Statement : ';
$e = 0;
while (true) {
    if ($e>=15) {
        break;
    }
    echo $e++.',';
}
echo'<hr>';

?>