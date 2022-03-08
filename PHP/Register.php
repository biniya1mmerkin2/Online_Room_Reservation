<?php
session_start();
require_once 'connection.php';
if(isset($_POST['register']))
{

    
    $fname=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO guestinfo (fname,lname,email,phone,username,password)
     VALUES ('$fname','$lname','$email','$phone','$uname','$hashedpass')";

     $result=mysqli_query($conn,$sql);
     if($result)
     {
         $_SESSION['message']="Successfuly Registerd";
         header("Location: ../Home/login.php");
         exit;
     }
     else
     {
        $_SESSION['message']="Change The Username";
        header("Location: ../Home/login.php");
        exit;
     }


    

}

?>