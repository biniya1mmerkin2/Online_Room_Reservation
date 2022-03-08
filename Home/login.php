<?php
session_start();
require_once 'header.php';
require_once '../PHP/connection.php';
// $acco1 =$_SESSION['acco'];

?>
<?php 
                       if(isset($_SESSION['message']))
                       {
                         $msg=$_SESSION['message'];
                         unset($_SESSION['message']);?>
                         <div class="alert alert-success" role="alert">
                       <?php echo $msg; ?>
                       </div><?php
                       }
                       else
                       {
                         $msg="";
                         ?>
                        <!-- <div class="alert alert-success" role="alert">
                       <?php echo $msg; ?>
                       </div> -->
                         <?php
                       }
                        ?>
<!-- login form -->
<div class="row mt-5 justify-content-center">
  <div class="col-6" style="width: 350px;">
  <form class="shadow p-3" action="../PHP/signin.php" method="POST">
    <div class="d-flex align-items-center justify-content-center my-3">
    <i class="fa-solid fa-right-to-bracket fa-3x"></i>
    <h2 class="text-center ms-2">SignIn</h2>
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 <p class="my-3"><a href="" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="text-decoration-none text-dark">forget password</a></p> 
  <div class="text-center">
  <button type="submit" class="btn btn-dark px-5 py-1" value="signin" name="signin">SignIn</button>
  </div>
  <p class="my-3 text-center"><a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-decoration-none text-dark">Sign Up</a></p>
  
</form>

  </div>
</div>
</div>



<!-- Button trigger modal -->
<!-- Modal -->
<form action="../PHP/sendEmail.php" method="post">
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Please,Enter your Email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <input type="email" class="form-control mb-2 w-100" name="email" id="email" autocomplete="off" required>
      
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <input type="submit" name="reset" class="btn btn-primary" value="Reset">
      </div>
    </div>
  </div>
</div>
    </form>

<!-- Modal -->
<form action="../PHP/Register.php" method="post" onsubmit="return checkValidity1()">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Signup</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <input type="text" class="form-control mb-2 w-100" name="name" id="name" placeholder="First Name" autocomplete="off" required><span id="fer"></span>
     <input type="text" class="form-control mb-2 w-100" name="lname" id="lname" placeholder="Last Name" autocomplete="off"  required><span id="ler"></span>
     <input type="email" class="form-control mb-2 w-100" name="email" id="email" placeholder="email" autocomplete="off"  required><span id="emer"></span>
     <input type="text" class="form-control mb-2 w-100" name="phone" id="phone" placeholder="phone" autocomplete="off"  required><span id="per"></span>
     <input type="text" class="form-control mb-2 w-100" name="uname" id="uname" placeholder="username" autocomplete="off"  required><span id="user"></span>
     <input type="password" class="form-control mb-2 w-100" name="password" id="password" placeholder="password" autocomplete="off"  required><span id="paser"></span>
     <input type="password" class="form-control mb-2 w-100" name="cpassword" id="cpassword" placeholder="Confirm Password"  autocomplete="off" required><span id="cpaser"></span>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="submit" name="register" class="btn btn-primary">Rgister</button>
      </div>
    </div>
  </div>
</div>

</form>





    
<script src="bootstrap.min.js"></script>
<script src="checkValidity.js"></script>
</body>
</html>