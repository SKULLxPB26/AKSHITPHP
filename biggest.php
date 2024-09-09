<?php
function greatest($a,$b,$c){
  

if($a>$b){
    if($a>$c){
        echo"a is greatest";
    }
    else
    {
        echo"c is greatest";
    }
}
elseif ($b>$c){
    echo "b is greatest";
}
else{
    echo"c is greatest";
}
}
$a=10;
$b=20;
$c=30;
 
$akshit=greatest($a,$b,$c);
?>