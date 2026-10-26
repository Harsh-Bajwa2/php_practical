<!DOCTYPE html>
<html>
<body>

<h2>User Input Form</h2>

<form method="post">
    Enter Name:
    <input type="text" name="name">
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    echo "Sanitized Name: " . $name;
}
?>

</body>
</html>