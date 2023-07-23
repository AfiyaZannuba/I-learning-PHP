<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php

$capitals = array("USA"=>"Washington D C", "Japan"=>"Kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");
$capital = $_POST["country"];
$print_capital = $capitals[$capital];

echo "The capital of the {$capital} is{$print_capital}";






//associative array = An array made of key=>value pairs



// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Beijing"; Adding new key value pairs
// array_pop($capitals); For removing last element
// array_shift($capitals); Removing first element
// $keys = array_keys($capitals); For getting all the keys in the associative array
// $values = array_values($capitals); For getting all the values in the associative array
// $capitals = array_flip($capitals); It will change the array by making capitals as the keys and countries as the value
// $capitals = array_reverse($capitals);

// foreach ($capitals as $key => $value){
//     echo "{$key} = {$value}  <br>";
// }


?>