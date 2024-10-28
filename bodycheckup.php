<?php

$servername="localhost";
$username="root";
$password="";
$database="checkup";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo "FAILED TO ESTABLISH THE CONNECTION";
}
else
{
    echo "CONNECTION ESTABLISHED SUCCESSFULLY";
}

$name=$_POST['NAME'];
$age=$_POST['AGE'];
$gender=$_POST['GENDER'];
$weight=$_POST['WEIGHT'];
$height=$_POST['HEIGHT'];
$meal=$_POST['MEAL'];
$breakfast=$_POST['BREAKFAST'];

$sql="INSERT INTO bodyscan VALUES('$name','$age','$gender','$weight','$height','$meal','$breakfast')";

if(mysqli_query($conn,$sql))
{
    echo "YOU HAVE ESTABLISHED CONNECTION WITH DATABASE";
}

mysqli_close($conn);
?>