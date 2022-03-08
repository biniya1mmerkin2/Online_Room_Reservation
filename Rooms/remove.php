<?php
require '../PHP/connection.php';
if(isset($_GET['date']))
{
    $id=$_GET['date'];
    $sql="DELETE FROM userinfo WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['messagetoadmin']="Removed";
        header("Location: ../RoomReservation.php");
        exit;
    }
}
?>