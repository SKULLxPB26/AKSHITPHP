<?php
if(isset($_FILES['image']))
{
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $filetmpname=$_FILES['image']['tmp_name'];
    $filesize=$_FILES['image']['size'];
    $filetype=$_FILES['image']['type'];
    $filename=$_FILES['image']['name'];
    echo $filename."<br>";
    echo $filetype."<br>";
    echo $filesize."<br>";
    echo  $filetmpname."<br>";
}

$hello=move_uploaded_file($filetmpname,"upload-files/".$filename);

if(isset($hello))
{
    echo "<br>"."PHOTO HAS BEEN UPLOADED";
}
?>



<html>
    <form method="post" enctype="multipart/form-data">
        <p>
        <input type="file" name="image">
        </p>
        <input type="submit" value="submit">
    </form>
</html>