

<?php
//takes in integer array
//returns integer array
function insertionSort($arr)
{
    //begins at first item in array
    //from i position up is unsorted
    for($i = 0; $i < count($arr); $i++)
    {
        $val = $arr[$i];
        $j = $i-1;
        //white item psoition is greater than 0
        //and the next item is greater or unsorted
        while($j >= 0 && $arr[$j] > $val)
        {
            //switches integer position to correct
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $val;
    }
return $arr;
}

//print image is very interesting
$test = array(4, 2, 3, 5, 1);
print_r(insertionSort($test));
?>


