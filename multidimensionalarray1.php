<?php
$name=array(
    "HYUNDAI"=>"CRETA","MITSUBISHI"=>"PAJERO","FORD"=>"ENDEAVOUR",
    "BAJAJ"=>"V15","ROYAL ENFIELD"=>"BULLET 350","HERO"=>"SPLENDOR",
    "TVS"=>"JUPITOR","HONDA"=>"ACTIVA","MAHINDRA"=>"GUSTO")
;
$keys=array_keys($name);
$values=array_values($name);
$i=0;
$j=0;
foreach($keys as $values)
{
    echo $values."<br>";
}
?>
 