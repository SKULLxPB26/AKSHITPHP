<?php
$akshit=array( 
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12));
   // echo $akshit[0][3];
   for ($i=0;$i<count($akshit);$i++){
    for($j=0;$j<count($akshit[$i]);$j++){
        echo $akshit[$i][$j];
      echo ".";
    }
echo "<br>";
   }
   
?>    