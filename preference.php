<?php
setcookie("theme", "dark", time() +3600);
if(isset($_COOKIE["theme"])){
    echo"your theme is". $_COOKIE["theme"];
}
else{
    echo"theme saved. refresh the page";
}
?>
