
<?php
function createWordList()
{
    //read file contents to string
    $filecontents = file_get_contents('/Users/treytuscai/Desktop/Project6/wctest.txt');
    //make lowercase
    $filecontents = strtolower($filecontents);
    //creates associative array with unique words and their counts
    $wordList = array_count_values(str_word_count($filecontents, 1));
    //sort based on values
    arsort($wordList);
    //print list
    foreach($wordList as $x => $x_value)
    {
      echo "" . $x . ": " . $x_value;
      echo "\n";
    }
}
createWordList()
?>




