<?php

// use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
 require '../dompdf_1-2-0/dompdf/autoload.inc.php';

 use Dompdf\Dompdf;
session_start();
require_once '../PHP/connection.php';
if(isset($_GET['id']))
{
    $message="user confirmed";
    $id=$_GET['id'];
    $status=$_GET['status'];
    $identity=$_GET['identify'];
   
        $sql="UPDATE userinfo SET Status='$status', identify='$identity' WHERE id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $sql1="SELECT *FROM userinfo WHERE id='$id'";
            $result1=mysqli_query($conn,$sql1);
            if($result1)
            {
                $data=mysqli_fetch_array($result1);
                $username=$data['user'];
                $sql2="SELECT *FROM guestinfo WHERE username='$username' ";
                $res=mysqli_query($conn,$sql2);
                if($res)
                {
                    $data1=mysqli_fetch_array($res);
                    $email=$data1['email'];
                    // echo $email;

                        // instantiate and use the dompdf class
                        $dompdf = new Dompdf();
                        $filename='../Customerfile/Customer Id.pdf';
                        $output='<center><h1 style="color: blueviolet; font-family: Georgia,
                         "Times New Roman", Times, serif;" >Hope Hotel</h2></center>
                         <center><h3> A View to Die for</h3></center> 
                         <small><span><b style="font-size: large;">Adrress:</b></span>Addis Abeba,Ethiopia</small><br>
                         <small><span><b style="font-size: large;">Gmail:</b></span>biniyammark04@gmail.com</small><br>
                         <h3 style="margin-left: 50px;">Customer ID</h3>';
                         $output.='<table border="1px solid " >
                         <thead >
                             <th style="padding-left: 30px;">Customer Name</th>
                         <th style="padding-left: 30px;">CheckIn Date</th>
                         <th style="padding-left: 30px;"">CheckOut Date</th>
                         <th style="padding-left: 30px;">RoomName</th>
                         <th style="padding-left: 30px;">Registration Date</th>
                         </thead>
                         <tbody>
                             <tr>';
                             $output.='
                                 <td style="padding-left: 30px;">'. $data1["fname"].$data1["lname"].'</td>'.
                                 '<td style="padding-left: 30px;">'.$data["checkin"].'</td>'.
                                 '<td style="padding-left: 30px;">'. $data["checkout"].'</td>'.
                                 '<td style="padding-left: 30px;">'.$data["roomname"].'</td>'.
                                 '<td style="padding-left: 30px;">'.$data["transactiondate"].'</td>
                             </tr>
                             
                         </tbody>
                     </table>
                 
                     <h3>Rules</h3>
                     <p>1,This id is valid until the expire date will reach.</p>
                     <p>2,The customer have the responsiblity to take the form when he came to our Hotel.</p>
                     <p>3,The customer must checkin within 24h after booking to the Hotel.</p>
                 
                       <h4>We proud to serve you</h4>';
                        
                        $dompdf->loadHtml($output);

                        // (Optional) Setup the paper size and orientation
                        $dompdf->setPaper('A4', 'landscape');

                        // Render the HTML as PDF
                        $dompdf->render();

                        $file=$dompdf->output();
                        file_put_contents($filename,$file);


                    
        
                    
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
                        $mail->addAddress($email, 'user');     //Add a recipient
                                    
                    
                    
                       
                        $mail->addAttachment($filename);
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Here is the subject';
                        $mail->Body    = "Confirmed the Request. Checkin within 24h</b> <br>
                        ";
                        
                    
                        $mail->send();
                        $_SESSION['messagetoadmin']="Message sent to the user";
                        header("Location: ../RoomReservation.php");
                        exit;
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    // $_SESSION["$username"]="userconfirmed";
                    // $_SESSION['messageroom']="User confirmed";
                    // header("location: ../RoomReservation.php");
                    // exit;
                }
                
            }
            
        }
        else
        {
            echo 'not updated';
        }
   
  
}
?>