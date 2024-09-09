<?php
function table($f,$i){
    echo"here is the table"."<br>";
    for($i=1;$i<=10;$i++){
        $multiply=$f*$i;
        
        echo "$f*$i=$multiply"."<br>";
    }
}
$f=8;
$i=1;

$akshit= table($f,$i);
?>