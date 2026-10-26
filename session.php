<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username= $_POST["username"];
    $password= $_POST["password"];
}
if ($username == "admin" && $password == "1234") {
    $_SESSION["username"] = $username;
    header("Location:welcome.php");
    exit();
}
else {
    echo "invalid your password";
}
    
?>
<form method = "post" action="">
    username : <input type ="text" name = "username"><br><br>
    password : <input type ="password" name= "password"><br><br>
    <input type ="submit" value = "Login">
</form>
