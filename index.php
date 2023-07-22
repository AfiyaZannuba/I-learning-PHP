<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="index.php" method="post">
    <label>quantity: </label><br />
    <input type="text" name="quantity">
    <input type="submit" value="total">
</form>
</body>
</html>
<?php 
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;
echo "You have ordered {$quantity} x {$item}/s <br />";
echo "Your total is \${$total}";

?>

<!-- NOTES -->
<!-- 
# PHP notes - Brocode

Difference between GET and POST

GET: $_GET is how it is represented.

In GET, data is appended to the url, so it is NOT SECURE. There is a character limit. However, bookmark is possible with the values, the GET requests can be cached. And also it is better for a search page.

POST: $_POST is how it is represented.

Data is packaged inside the body of the HTML. So it is MORE SECURE. There is no data limit. However in contrary to GET,  they cannot be bookmarked, the requests cannot be cached. And is better for submitting credentials.

-->