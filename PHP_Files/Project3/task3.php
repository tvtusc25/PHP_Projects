
<?php
    $a = 5;
    $b = "6";
    $c = 7.0;
    $d = True;

    //True boolean prints 1
    //String is converted to int
    //Double or float is converted to int
    //When adding differing types, they are casted to int
    //prints 11, 42, and 12
    echo $d;
    echo $a + $b;
    echo $b * $c;
    echo $a + $c;

    //if else statement to demonstrate boolean
    //boolean prints either 1 or nothing if false
    if($a == $c)
    {
        echo $d;
    }
    else
    {
        $d = false;
        echo $d;
    }

//function example
function test
{
    $z = 5;
}

?>


