<?php
echo "this is example of array<br>";
$name =array("akshit"=>375,"sukhdeep"=>380,"amandeep"=>350,"tanveer"=>355);
$keys=array_keys($name);
$values=array_values($name);

for ($i=0;$i<count($name);$i++){
    echo "total marks scored by $keys[$i] are $values[$i]"."<br>";
}

?>