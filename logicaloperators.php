<?php
$child = false;
$senior = false;
$ticket = null;

if($child || $senior){
    $ticket= 10;
}else{
    $ticket = 15;
}

echo "The ticket price is \${$ticket}";
?>



<!-- NOTES -->
<!--

&& - AND logical operator - Both statements must be true
|| - OR logical operator - Anyone of the statement needs to be true.


-->