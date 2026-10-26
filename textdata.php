<?php

$file = fopen("student.txt", "w");

if ($file) {

    $data = "Name: Komal\n";
    $data .= "Course: BCA\n";
    $data .= "Roll Number: 101\n";

    fwrite($file, $data);

    fclose($file);

    echo "Data written successfully into the file.";

} else {
    echo "Unable to open the file.";
}

?>