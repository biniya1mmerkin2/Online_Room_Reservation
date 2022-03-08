<?php
session_start();
if(!empty($_SESSION['username']) && !empty($_SESSION['acco']) && !empty($_SESSION['chin']) && !empty($_SESSION['chout']) && !empty($_SESSION['roomname']))
{
    require 'connection.php';
    $user=$_SESSION['username'];
    $acco=$_SESSION['acco'];
    $chin=$_SESSION['chin'];
    $chout=$_SESSION['chout'];
    $roomname=$_SESSION['roomname'];
    $numberofdays=$_SESSION['numberofdays'];
    $price=$_SESSION['price'];
    $sql="INSERT INTO userinfo(checkin,checkout,accomodation,user,roomname,numberofdays,price) VALUES('$chin','$chout','$acco','$user','$roomname','$numberofdays','$price')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['message']="Booking Successesful";
        unset($_SESSION['roomname']);
        unset($_SESSION['price']);
        unset($_SESSION['chin']);
        unset($_SESSION['chout']);
        unset($_SESSION['acco']);
        unset($_SESSION['numberofdays']);
        unset($_SESSION['price']);

        header("Location: ../Home/profile.php");
        exit;
    }
    else
    {
        $_SESSION['message']="Booking Faield";
        header("Location: ../Home/profile.php");
        exit;
    }
}
else
{
    $_SESSION['message']="You should checkin first";
        header("Location: ../Home/profile.php");
        exit;

}

?>