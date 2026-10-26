<!DOCTYPE html>
<html>
    <body>
        <h2> Registration Form</h2>
    
<form action = "process.php" method="post">
    <label> Name: </label>
    <input type ="text" name="name" required>
    <label> email: </label>
    <input type = "email" name= "email" required>
    <label> course: </label>
    <select>
        <option value="bca">bca</option>
        <option value= "bba" >bba</option>
</select>
<label>Gender:</label>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<br><br>
<label>City:</label>
<select name="city" required>
    <option value="">Select City</option>
    <option value="Moga">Moga</option>
    <option value="Ludhiana">Ludhiana</option>
    <option value="Amritsar">Amritsar</option>
    <option value="Chandigarh">Chandigarh</option>
</select> 
<br><br>
<button type ="submit">registration</button>
</form>
<?php
if(isset($_POST['submit'])){
    $name= trim($_POST['name']);
    $email= trim($_POST['email']);
    $password =$_POST['password'];
    if(empty($name)){
        echo"name is required";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "invalid email address";
    }
    elseif(strlen($password)<8){
        echo "password must be at least 8 chracter";
    }
    else
        {
            echo "registraton successful";
        }
}
?>
</body>
</html>

