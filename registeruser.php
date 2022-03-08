<?php
session_start();
require_once 'PHP/connection.php';
if(isset($_POST['add']))
{

    
    $fname=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone="null";
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];
    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO guestinfo (fname,lname,email,phone,username,password,status)
     VALUES ('$fname','$lname','$email','$phone','$uname','$hashedpass','$usertype')";

     $result=mysqli_query($conn,$sql);
     if($result)
     {
         $_SESSION['messagetoadduser']="Successfuly Registerd";
         header("Location: users.php");
         exit;
     }
     else
     {
        $_SESSION['messagetoadduser']="Error Occured";
        header("Location: users.php");
        exit;
     }


    

}

?>