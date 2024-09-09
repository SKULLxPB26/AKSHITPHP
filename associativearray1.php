<?php
$student=array("akshit"=>100,"amandeep"=>99,"sukhdeep"=>98,"tanveer"=>97,"raghav"=>96);
$keys=array_keys($student);
$values=array_values($student);
$i=0;
for ($i=0;$i<count($student);$i++)
{
    echo "total marks scored by $keys[$i] in php are $values[$i].<br>";
}
?>