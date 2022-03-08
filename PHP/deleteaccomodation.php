<?php
include 'connection.php';
session_start();
if(isset($_POST['deleteacco']))
{
    if(isset($_POST['select']))
    {
        foreach($_POST['select'] as $idnumber)
        {
            $sql="DELETE FROM `accomodationtable` WHERE id='$idnumber'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $_SESSION['messagetoadmin']="Deleted success";
               header("Location: ../accomodationmain.php");
               exit;
            }
            else
            {
                echo "Data not deleted";
            }
        }
    }
    else
    {
          $_SESSION['messagetoadmin']="Please,select Checkbox!";
          header("Location: ../accomodationmain.php");
          exit;

    }
}
else
{
    echo 'no';
}

?>