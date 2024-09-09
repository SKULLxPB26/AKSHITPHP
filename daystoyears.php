<?php
function daystoyears($days){
    $years=$days/365;
    echo "total number of years=$years"."<br>";    
}
 
$days=637364;
daystoyears($days);
?>