<?php
session_start();

if(isset($_GET['setsession']))
{
    // $_SESSION['price']=$_POST['price'];
    //  $_SESSION['roomname']=$_POST['roomname'];
    //  header("Location: ../Home/login.php");
    //  exit;
       echo $_GET['id'];
}

?>