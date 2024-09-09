<?php
function subtraction($a,$b)
{
    $diff=$b-$a;
    return $diff;
}

$a=50;
$b=100;
$totaldifference= subtraction($a,$b);

echo"difference between two numbers is $totaldifference";
?>