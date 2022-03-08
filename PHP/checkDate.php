<?php
session_start();
if (isset($_POST['upload'])) {
    require_once 'connection.php';
    if (isset($_POST['upload'])) {
        if ($_POST['chin'] != "" and $_POST['chout'] != "") {
            
            $checkedin="CheckedIn";
            $chin = $_POST['chin'];
            $chout = $_POST['chout'];
            $acco = $_POST['acco'];
            $startD=strtotime($chin);
            $finishD=strtotime($chout);
            $numberofdays=($finishD-$startD)/60/60/24;
            if($numberofdays==0)
            {
                $numberofdays=1;
            }
            
            $_SESSION['numberofdays']=$numberofdays;
            $persons=$_POST['numberofperson'];
    
            $_SESSION['chin'] = $chin;
            $_SESSION['chout'] = $chout;
            $_SESSION['acco'] = $acco;
            $_SESSION['person']=$persons;

            if($chin<=$chout)
            {
                $sql = "SELECT *FROM userinfo WHERE accomodation ='$acco' AND checkin BETWEEN '$chin' AND '$chout'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_array($result)) {
                        
                            header("Location: ../Home/index.php?error=Room is reserved in this date!");
                            exit;
                        
                        
                        
                    }
                } else {
                    
                        $url = '../Home/avaliableRoom.php';
                        header("Location:" . $url);
                        exit;
                    
                    
                   
                }
            }
            else
            {
                header("Location: ../Home/index.php?error=Please,enter the date in the correct order!");
                exit;
            }
            

        }
        else
        {
            header("Location: ../Home/index.php?error=Please,enter checkin and checkout date!");
            exit;
        }
       
    }
} else {
    header("Location: ../Home/login.php");
    exit;
}
