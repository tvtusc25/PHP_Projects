


<?php

//function must be named but it is not case sensitive
//functions do not have an assigned type
//declaring variable and assigning function to it
$test = function($test)
{
    echo "Hello World!";
    //you can pass function to another function
    $test();
};

//Call the test function using variable
$test($test);

?>





