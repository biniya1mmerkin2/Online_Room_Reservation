<?php
session_start();
if(isset($_SESSION['usernamelogin']) && isset($_SESSION['passwordlogin']))
{
    require 'PHP/connection.php';
    require 'header.php';

    if(isset($_SESSION['messagetoadduser']))
{
  $msg=$_SESSION['messagetoadduser'];
  unset($_SESSION['messagetoadduser']);?>
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
}?>
<div class="container-fluid ">
    <div class="container p-5  ">
        <div class="row justify-content-center">
            <div class="col-6">
                <fieldset>
                    <legend>Add Users
                    </legend>
                    <form action="registeruser.php" method="POST" onsubmit="return checkValidity()">
                    <input type="text" class="form-control mb-2 w-100" name="name" id="name" placeholder="First Name" autocomplete="off" required><span id="fer"></span>
                    <input type="text" class="form-control mb-2 w-100" name="lname" id="lname" placeholder="Last Name" autocomplete="off"  required><span id="ler"></span>
                    <input type="text" class="form-control mb-2 w-100" name="uname" id="uname" placeholder="username" autocomplete="off"  required><span id="user"></span>
                    <input type="email" class="form-control mb-2 w-100" name="email" id="email" placeholder="email" autocomplete="off"  required><span id="email"></span>
                    <select  name="usertype" class="form-select" id="usertype">
                        <option value="admin">Admin</option>
                        <option value="reseption">Reseption</option>
                    </select>
                    <input type="password" class="form-control mb-2 mt-2 w-100" name="password" id="password" placeholder="password" autocomplete="off"  required><span id="paser"></span>
                    <input type="password" class="form-control mb-2 w-100" name="cpassword" id="cpassword" placeholder="Confirm Password"  autocomplete="off" required><span id="cpaser"></span>
                          
                    <button type="submit" name="add" value="add"  class="btn btn-primary">ADD</button>
                    </form>

                </fieldset>
            </div>
        </div>

    </div>
    <?php

}
else
{
    header("Location:Home/index.php");
    exit;
}

?>

    