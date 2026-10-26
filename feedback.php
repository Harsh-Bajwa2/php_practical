<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST["name"];
    $feedback=$_POST["feedback"];
    if(empty($name) || empty($feedback)){
        echo "please fill all fields";
    }
    else{
        echo"thankyou".$name."<br>";
        echo "your feedback:".$feedback;
    }
}
?>
<form method = "post" action="">
    name : <input type ="text" name = "name"><br><br>
    feedback : <textarea name ="feedback"></textarea><br><br>
    <input type ="submit" value = "submit">
</form>
