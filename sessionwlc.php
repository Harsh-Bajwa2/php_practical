<?php
session_start();
$_SESSION["username"] = "koml";
echo "welcome,".$_SESSION["username"];
?>
