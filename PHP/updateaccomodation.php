<?php
require 'connection.php';
session_start();

if(isset($_POST['upload']))
{
    $id=$_POST['id'];
    $accomodation=$_POST['accomodation'];
    $description=$_POST['description'];

    $sql="UPDATE accomodationtable SET accomodation='$accomodation' , description='$description' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['messagetoadmin']="Update success";
        header("Location: ../accomodationmain.php");
        exit;
    }
}
?>