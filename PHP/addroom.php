<?php
require_once 'connection.php';
if(isset($_POST['upload']))
{
    $target="../image/".basename($_FILES['image']['name']);

    $name=$_POST['name'];
    $acco=$_POST['accomodation'];
    
    $per=$_POST['persons'];
    $price=$_POST['price'];
    $img=$_FILES['image']['name'];;

    $sql="INSERT INTO tblroom(roomname,accomodation,numberofperson,	price,image) VALUES('$name','$acco','$per','$price','$img')";
    $result=mysqli_query($conn,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'] , "$target"))
    {
        $url='../roommain.php';
        header('Location:'.$url);
        exit;
    }
    else
    {
          echo 'not inserted';
    }


}

?>