<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label>radius: </label>
        <input type="text" name="radius">

        <input type="submit" value="total">

    </form><br>
</body>
</html>
<?php 

$radius = $_POST["radius"];
$circumference = null;
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);
echo "Circumference = {$circumference}cm <br>";
$area = null;
$area = pi() * pow($radius, 2);
$area = round($area, 2);
echo "Area = {$area}cm^2" . "<br>";

$volume = null;
$volume = (4/3) * pi() * pow($radius, 3);
$volume = round($volume, 2);
echo "Volume = {$volume}cm^3" . "<br>";
?>