<?php
function addition($a,$b){
    $sum=$a+$b;
    return $sum;
}
function subtraction($a,$b){
    $minus=$b-$a;
    return $minus;
}
function multiplication($a,$b){
    $multiply=$a*$b;
    return $multiply;
}
function division($a,$b){
    $division=$b/$a;
    return $division;
}

$a=20;
$b=40;

$into=multiplication($a,$b);
$difference=subtraction($a,$b);
$plus=addition($a,$b);
$akshit=division($a,$b);

echo"the sum of two variables=$plus"."<br>";
echo"the multiply of two variables= $into"."<br>";
echo"the difference of two variables= $difference"."<br>";
echo"the division of two variables= $akshit"."<br>";
?>
