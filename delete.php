<?php
$akshit=array(1,2,3,4,5);
unset($akshit[3]);
$akshit = array_values($akshit);
//for($i=0;$i<count($akshit);$i++)
//{
   // echo $akshit[$i];
//}
for ($i = 0; $i < count($akshit); $i++) {
    echo $akshit[$i];
}
?>