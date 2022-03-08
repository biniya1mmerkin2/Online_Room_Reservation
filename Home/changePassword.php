<?php
  session_start();
  require_once 'header.php';
  require_once '../PHP/connection.php';
  if(isset($_GET['code']))
  {
    $code=$_GET['code'];
    $_SESSION['code']=$code;
  }
  else
  {
    $code="";
    $_SESSION['code']="";
  }

?>
 <div class="container row">
   <div class="container col-5">

   </div>
 </div>
 <div class="container row">
   <div class="container col-6 justify-content-center">
   <main class="form-signin mt-3">
    <form action="../PHP/resetpassword.php" method="POST">
      <h1 class="h3 mb-3 fw-normal">Reset Password</h1>
     
      <div class="form-floating">
        <input type="password" name="newpassword" class="form-control w-50 mb-2" id="password" placeholder="New Password" required>
        <label for="floatingInput">New Password</label>
      </div>
     
      <div class="form-floating">
        <input type="password" name="confirmnewrepassword" class="form-control w-50" id="comfirmpassword" placeholder="Confirm New password" required>
        <label for="floatingPassword">Confirm New Password</label>
      </div>

      <input class="w-50 mt-2 btn btn-lg btn-primary" name="upload" value="Reset" type="submit">
      

    </form>
  </main>
   </div>
 </div>

 <div class="container row">
   <div class="container col-0">

   </div>

 </div>
<?php

?>
  


   
</body>
</html>