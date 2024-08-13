<html>
<head>
<title>practicing array</title>
</head>
<body>
<?php
$akshit=array("height"=>180,"weight"=>104,"education"=>"bca","college"=>"a.s.college");
$keys=array_keys($akshit);
$values=array_values($akshit);

$inti=0;
for($i=0;$i<count($akshit);$i++)
{
    echo("the description of akshit is $keys[$i] = $values[$i]<BR>");
}
?>
</body>
</html>