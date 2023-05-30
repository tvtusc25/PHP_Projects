


<?php

$count = 0;
//basic while loop
//while count < 5 print its value
while($count < 5)
{
    echo($count);
    $count+=1;
}


$ints = 0;
//basic for loop
//while i is less than 5 print ints' value
for($i = 0; $i < 5; $i++)
{
    echo($ints);
}


$num = 0;
//basic if/else statement
//if num = 0, print true else print false
if ($num == 0)
    echo ("true");
else
    echo ("false");

$name = "Trey";


//basic switch statements
//contains break and continue statements
//checks if the case matches the condition
switch($name)
{
    case "Ethan":
        echo("Not me");
        continue;
    case "Justin":
        echo("Not me");
        continue;
    case "Carson":
        echo("Not me");
        continue;
    case "Trey":
        echo("That's me!");
        break;
}

?>




