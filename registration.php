<?php
if (isset($_POST["name"])&& isset($_POST["email"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "NAME: ". $name . "<br>";
    echo "EMAIL: ". $email;
}
?>
<form method = "post" action="">
    Name : <input type ="text" name = "name"><br><br>
    Email : <input type ="email" name= "email"><br><br>
    <input type ="submit" value = "REGISTER">
</form>
