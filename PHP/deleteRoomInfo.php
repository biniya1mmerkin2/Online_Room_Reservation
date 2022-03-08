<?php
require_once 'connection.php';
session_start();
if(isset($_POST['delete']))
{
    if(isset($_POST['deleteData']))
    {
        foreach($_POST['deleteData']as $idnumber)
        {
            $sql="DELETE FROM tblroom WHERE id='$idnumber'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                // $_SESSION['error']="";
               header("Location: ../roommain.php?;");
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
    //    $_SESSION['error']="Please,Select the CheckBox First";
       header("Location: ../roommain.php?error='Please,select Checkbox!'");
       exit;

    }
}
?>