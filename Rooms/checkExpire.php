<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

 require '../PHP/connection.php';
if(isset($_GET['date']))
{
    $date=$_GET['date'];
    //$datecurent="2022-02-17";
    //  $datenn=date('Y-m-d-h-i-s',strtotime($date ));
    $user=$_GET['user'];
    $sql="SELECT *FROM guestinfo WHERE username='$user'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_array($result);
    $email=$data['email'];
    $expDate=date('Y-m-d', strtotime($date."+ 1 days"));
    $curentDate=Date('Y-m-d');//,strtotime($datecurent)
    

    if($curentDate>$expDate)
    {
        // $_SESSION['messagetoadmin']="User`s Request Expired. Please, Remove the user";
        // header("Location: ../RoomReservation.php");
        // exit;

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
                        $mail->Subject = 'Here is the subject';
                        $mail->Body    = "Your Booking is Expired! <br>
                        ";
                        
                    
                        $mail->send();
                        $_SESSION['messagetoadmin']="User's Request Expired. Please, Remove the user";
                         header("Location: ../RoomReservation.php");
                         exit;
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
        
    }
    else
    {
        $_SESSION['messagetoadmin']="User`s Request Not Expired. Wait";
        header("Location: ../RoomReservation.php");
        exit;
    }
}

?> 