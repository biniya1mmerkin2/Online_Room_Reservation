<?php 
session_start();
// unset($_SESSION["acco"]);
// unset($_SESSION["username"]);
// unset($_SESSION["price"]);
// unset($_SESSION["roomname"]);
// unset($_SESSION["chin"]);
// // header("Location : ../Home/index.php");
// //  exit;
// echo 'logout';
session_destroy();
header("Location: ../Home/index.php");
exit;

?>