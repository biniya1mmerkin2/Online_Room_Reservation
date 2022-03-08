<?php
require_once 'connection.php';
if(isset($_POST['upload']))
{
   
$acco=$_POST['accomodation'];
$descc=$_POST['description'];
$sql="INSERT INTO accomodationtable(accomodation,description) values('$acco ', '$descc')";

$send=mysqli_query($conn,$sql);
if(!$send)
{
    die("Error in inserting into the database");
}
else
{
    $url='../index.php';
    header('Location:'.$url);
    exit;
}

}
?>