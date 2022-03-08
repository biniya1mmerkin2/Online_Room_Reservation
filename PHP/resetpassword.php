<?php
session_start();
require 'connection.php';
if(isset($_POST['upload']))
{
    $code=$_SESSION['code'];
  $password=$_POST['newpassword'];
  $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
  $sql="SELECT *FROM resetpassword WHERE uniquecode='$code'";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    if(mysqli_num_rows($result)>0)
    {
      if($data=mysqli_fetch_array($result))
      {
        $email=$data['email'];
        $sql1="UPDATE guestinfo SET password='$hashedpassword' WHERE email='$email'";
        $result1=mysqli_query($conn,$sql1);
        if($result1)
        {
          $sql="DELETE FROM resetpassword WHERE uniquecode='$code'";
          $result2=mysqli_query($conn,$sql);
          $_SESSION['message']="Password Reseted.";
            header("Location: ../Home/login.php");
            exit;
        }
      }
    }
    else
    {
      $_SESSION['message']="The code is Expired. Try again.";
      header("Location: ../Home/login.php");
      exit;
    }
    
  }
  else
  {
    $_SESSION['message']="Error occured!";
    header("Location: ../Home/login.php");
    exit;
  }

}

?>