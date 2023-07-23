<?php

$foods = array("apple", "orange", "banana", "coconut");
// echo $foods[0] . "<br />";
// echo $foods[1] . "<br />";
// echo $foods[2] . "<br />";
// echo $foods[3] . "<br />";

// $foods[0] = "pineapple";
// array_push($foods, "kitkat", "kiwi"); //adds element to the back
// array_pop($foods); //last element is removed
// array_shift($foods); //removes first element in the array
// $foods = array_reverse($foods); //reverse the order of the array. Have to reassign as a variable to make it work.
echo count($foods) . "<br />";

foreach($foods as $food){
    echo $food . "<br />";
}
?>