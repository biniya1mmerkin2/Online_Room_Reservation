<?php
session_start();
require '../PHP/connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $checkin="CheckedIn";
    $sql="UPDATE userinfo SET status='$checkin' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['test']="two";
        header("Location: ../RoomReservation.php");
        exit;

    }
}
?>