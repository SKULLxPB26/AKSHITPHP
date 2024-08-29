<?php
$name=array(
    array("HYUNDAI"=>"CRETA","MITSUBISHI"=>"PAJERO","FORD"=>"ENDEAVOUR"),
    array("BAJAJ"=>"V15","ROYAL ENFIELD"=>"BULLET 350","HERO"=>"SPLENDOR"),
    array("TVS"=>"JUPITOR","HONDA"=>"ACTIVA","MAHINDRA"=>"GUSTO")
);
$keys=array_keys($name);
$values=array_values($name);
$i=0;
$j=0;
foreach($name as $values)
{
    echo"$name is a product of brand $values";
}
?>
