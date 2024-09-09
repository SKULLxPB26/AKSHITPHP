<?php
function smallest($a,$b,$c){
  

if($a<$b){
    if($a<$c){
        echo"a is smallest";
    }
    else
    {
        echo"c is smallest";
    }
}
elseif ($b<$c){
    echo "b is smallest";
}
else{
    echo"c is smallest";
}
}
$a=847;
$b=548;
$c=857;
 
$akshit=smallest($a,$b,$c);
?>