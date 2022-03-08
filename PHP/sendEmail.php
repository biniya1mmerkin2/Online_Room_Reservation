<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'connection.php';
session_start();


if(isset($_POST['email']) && isset($_POST['reset']))
{
    $email=$_POST['email'];
    echo $email;
    $sql="SELECT *FROM guestinfo WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $data=mysqli_fetch_array($result);
        $user=$data['username'];
        $code=md5($email);
        $query=mysqli_query($conn,"INSERT INTO resetpassword(uniquecode,email) VALUES('$code','$email')");
    //Load Composer's autoloader
    require '../vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
      //biniyammark04
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'biniyammark04@gmail.com';                     //SMTP username
        $mail->Password   = 'BINIyam12345678';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('biniyammark04@gmail.com', 'HopeHotel');
        $mail->addAddress($email, $user);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reseting';
        $mail->Body    = "We have sent a password reset link below</b> <br>
        <a href='http://localhost/webfinalproject/home/changepassword.php?code=$code'>Click this link</a>
        ";
        
    
        $mail->send();
        $msg="Message has been sent check your email";
        $_SESSION['message']=$msg;
        header("Location: ../Home/login.php?message=$msg");
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
       

    }
        else
        {
            echo 'email not found';
        }
    }


?>
