<?php
session_start();
require '../PHP/connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $checkout="CheckedOut";
    $sql="UPDATE userinfo SET status='$checkout' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location: ../RoomReservation.php");
        exit;

    }
}
?>