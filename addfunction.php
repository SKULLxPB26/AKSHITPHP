<?php
echo"this is add function<br>";
function addition($a,$b){
    $sum=$a+$b;
    return $sum;
}

$a=50;
$b=100;

$total=addition($a,$b);
echo "$total"; 
?>