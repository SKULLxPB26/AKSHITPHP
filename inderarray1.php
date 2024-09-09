<?php
$class[0]="akshit";
$class[1]="amandeep";
$class[2]="sukhdeep";
$class[3]="tanveer";
$class[4]="raghav";
$i=0;
for($i=0;$i<count($class);$i++)
{
    echo "student name=$class[$i].<br>";
}
$student=array("akshit","amandeep","sukhdeep","tanveer","raghav");
foreach($student as $values)
{
    echo "student name is $values.<br>";
}
?>
