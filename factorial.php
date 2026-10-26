<?php
function factorial($n)
{
    $fact = 1;
    for($i=1; $i<=$n ;$i++){
        $fact = $fact * $i;
    }
    return $fact;
}
$num = 5;
echo "factorial of $num =". factorial ($num);
?>
