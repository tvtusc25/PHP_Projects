
<?php
//Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$
//Variables can be declared anywhere
//Scopes include local, global, static
//global variables
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // outputs "Bob, Joe"


$4site = 'not yet';     // invalid; starts with a number
$_4site = 'not yet';    // valid; starts with an underscore
$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.

$$var; //reference varibale that stores the value of $var

function test()
{
    //local scope
    $x = 5;
    //global keyword
    global $z = 6
    //static keyword
    static $y = 4
}
?>
//sources: https://www.php.net/manual/en/language.variables.basics.php


