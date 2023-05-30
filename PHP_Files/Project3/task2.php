
<?php
//function that takes in array and number parameter
function binarySearch(Array $array, $x)
{
    //=== denotes equality of both operands and data types
    //return statement can be on same line
    //base case
    if(count($array) === 0) return false;
    $lowBound = 0;
    //count() gives array size
    $highBound = count($array)-1;
    
    //$ follows variable
    //while loop
    while($lowBound <= $highbound)
        {
            //floor round number down to nearest integer
            //local scope
            $middle = floor(($lowBound + $highBound)/2)
            // element found at mid
            //checks equality of middle of array
            if($array[$middle] == $x)
            {
                return true;
            }
              
            if ($x < $array[$middle])
            {
                // search the left side of the array
                $highBound = $middle -1;
            }
            else
            {
                // search the right side of the array
                $lowBound = $middle + 1;
            }
        }
                  
    // If we reach here element x doesnt exist
    return false;
}
?>


