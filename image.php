<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
    Select File:
    <input type="file" name="file">
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    if (!is_dir("uploads")) mkdir("uploads");

    if (move_uploaded_file($tmp, "uploads/" . basename($name)))
        echo "File Uploaded Successfully!";
    else
        echo "Upload Failed!";
}
?>

</body>
</html>