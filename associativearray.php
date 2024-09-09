<?php
$name=array("AKSHIT BHARDWAJ"=>"ALTO","RAGHAV"=>"VISTA","HARPREET MAND"=>"ALTO","AMAN RAMGARHIA"=>"MARUTI 800","SUKHDEEP SINGH"=>"TATA SKOOL");
$keys=array_keys($name);
$values=array_values($name);
$i=0;
for ($i=0;$i<count($name);$i++)
{
    echo "$keys[$i] uses $values[$i] as their transport vehicle"."<br>";
}
?>