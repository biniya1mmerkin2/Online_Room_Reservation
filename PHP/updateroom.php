<?php
require_once 'connection.php';
if(isset($_POST['upload']))
{
    $id=$_POST['id'];
    $target="../image/".basename($_FILES['image']['name']);

    $name=$_POST['name'];
    $acco=$_POST['accomodation'];
    
    $per=$_POST['persons'];
    $price=$_POST['price'];
    $img=$_FILES['image']['name'];;

    $sql="UPDATE tblroom SET roomname='$name', accomodation='$acco', numberofperson='$per', price='$price', image='$img' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'] , "$target"))
    {
        $url='../roommain.php';
        header('Location:'.$url);
        exit;
    }
    else
    {
        $url='../roommain.php';
        header('Location:'.$url);
        exit;
    }


}

?>