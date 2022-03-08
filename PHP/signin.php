<?php
require_once 'connection.php';
session_start();
if(isset($_POST['signin']) && isset($_POST['username']) && isset($_POST['password']))
{

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $_SESSION['username']="";
        $username=$_POST['username'];
        $password=$_POST['password'];
        $_SESSION['login']="";

        $_SESSION['usernamelogin']=$username;
        $_SESSION['passwordlogin']=$username;
       
        $_SESSION['username']=$username;
        $sql="SELECT *FROM guestinfo WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($result)>0)
        {
            
            while($data=mysqli_fetch_array($result))
            {
                // if($data['password']==='admin')
                // {
                //     // $_SESSION['login']="logedin";
                //   header("Location: ../index.php");
                //   exit;
                // }
                // else
                // {
                    if($data['status']=='user')
                    {
                        $passhash=$data['password'];
                        if(password_verify($password,$passhash))
                        {
                            $_SESSION['login']="logedin";
                            header("Location: ../Home/profile.php");
                            exit;
                        }
                        else
                        {
                            $_SESSION['message']="Password is not Correct";
                            header("Location: ../Home/login.php");
                            exit;
                        }
                    }
                    else
                    {
                        $passhash=$data['password'];
                        if(password_verify($password,$passhash))
                        {
                            $_SESSION['login']="logedin";
                            header("Location: ../index.php");
                            exit;
                        }
                        else
                        {
                            $_SESSION['message']="Password is not Correct";
                            header("Location: ../Home/login.php");
                            exit;
                        }

                    }
                    
                
                
            }
           
           // echo $hashedpass;
        }
        else
        {
            $_SESSION['message']="Username is not Correct";
                    header("Location: ../Home/login.php");
                    exit;
    
        }
    }
    else
    {
        $_SESSION['message']="Empty username or password";
        header("Location: ../Home/login.php");
        exit;
    }

   
}

?>