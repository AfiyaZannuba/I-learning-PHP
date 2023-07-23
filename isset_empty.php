
<form action="isset_empty.php" method="post">
    <label>Username: </label><br />
    <input type="text" name="username" id=""><br />
    
    
    <label>Password: </label><br />
    <input type="password" name="password" id=""><br />

    <input type="submit" name="login" value="LOG IN"><br />

</form>
<?php

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "username is missing";
    }
    elseif(empty($password)){
        echo "password is missing";
    }
    else{
        echo "Hello {$username}";
    }
}

// foreach($_POST as $key => $value){
//     echo "{$key} = {$value} <br />";
// }

// isset() = Returns TRUE if a variable is declared and not null.
// empty() = Returns TRUE if a variable is not declared, false, null, ""

// $username = "Afiya";
// $myname = null;


// if(empty($empty)){
// echo "The username is empty";
// }else{
//     echo "The username is NOT empty";
// }
?>
