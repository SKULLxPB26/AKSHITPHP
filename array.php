<?php
$a=array( 
    array(1,2),   // 0
    array(5,6),   // 1 
    array(9,10)); // 2

    $b = array(
    array(11,22),
    array(55,66),
    array(99,100));

$c=[];
    for($i=0; $i < count($a); $i++){
        for($j=0; $j < count($a[$i]); $j++ ){
             $c[$i][$j] =$a[$i][$j] + $b[$i][$j];
             echo  "     " . $c[$i][$j] ;
            }

            echo "<br>";
        }

 echo $c[1][0];
   

?>