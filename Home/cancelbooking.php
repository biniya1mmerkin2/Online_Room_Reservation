<?php
session_start();
unset($_SESSION['chin']);
unset($_SESSION['chout']);
unset($_SESSION['roomname']);
unset($_SESSION['acco']);
unset($_SESSION['price']);
unset($_SESSION['numberofdays']);

//session_destroy();
header("Location: profile.php");
exit;
?>