<?php

$servername="localhost";
$username="root";
$password="";
$database="BCA";

$conn=mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    echo "CONNECTION BUILT SUCCESSFULLY"."<br>";
}
else
{
    echo "FAILED TO BUILT THE CONNECTION"."<br>";
}

$studentname=$_POST['NAME'];
$twelethyear=$_POST['12thYEAR'];
$percentage=$_POST['PERCENTAGE'];
$extrasubject=$_POST['EXTRASUBJECT'];
$hostel=$_POST['HOSTEL'];
$language=$_POST['LANGUAGE'];

$sql="INSERT INTO bcaform VALUES ('$studentname','$twelethyear','$percentage','$extrasubject','$hostel','$language')";

if(mysqli_query($conn,$sql))
{
    echo "DATA ENTERED INTO TABLE SUCCESSFULLY"."<br>";
}
else
{
    echo "FAILED TO ENTER THE DATA INTO THE TABLE"."<br>";
}

mysqli_close($conn);
?>