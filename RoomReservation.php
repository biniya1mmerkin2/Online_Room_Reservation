<?php
session_start();
if(isset($_SESSION['usernamelogin']) && isset($_SESSION['passwordlogin']))
{
    require_once 'header.php';

    if(isset($_SESSION['messagetoadmin']))
    {
      $msg=$_SESSION['messagetoadmin'];
      unset($_SESSION['messagetoadmin']);?>
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
<div class="container-fluid">
        <div class="container">

            <div class="conatainer row justify-content-center mt-5">
                <div class="col-1"></div>
                <div class="col-8">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">User</th>
                                <th scope="col">CheckIn Date</th>
                                <th scope="col">Registration time</th>
                                <th scope="col">Accomodation Type</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $sql = "SELECT *FROM userinfo";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($data = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><input type="checkbox" name="check"></td>
                                        <td><?php echo $data['user']; ?></td>
                                        <td><?php echo $data['checkin']; ?></td>
                                        <td><?php echo $cd=$data['transactiondate']." "; 
                                        
                                        ?></td>
                                        <td><?php echo $data['accomodation']; ?></td>
                                        <td><?php echo $data['Status']; ?></td>
                                         <td>
                                            
                                            <?php
                                              if($data['Status']=="pending"){

                                              ?>
                                            <a href="Rooms/updateConfirmation.php?id=<?php echo $data['id'].'&'.'status'.'='.'confirmed'.'&'.'identify'.'='.'1'; ?>" type="button" class="btn btn-success">Confirm</a>
                                              
                                             <?php }
                                             if($data['Status']=="confirmed")
                                             {?>
                                                <a href="Rooms/checkExpire.php?date=<?php echo $data['transactiondate']; ?> && user=<?php echo $data['user']; ?>" type="button" class="btn btn-success">Check Exp</a>
                                                <a href="Rooms/remove.php?date=<?php echo $data['id']; ?>" type="button" class="btn btn-danger mt-1">Remove</a>
                                                <?php
                                             }
                                             ?>
                                            </td>
                                        
                                         <td>
                                             <?php
                                              if($data['Status']=="confirmed"){

                                              ?>
                                             <a href="Rooms/checkIn.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-success">CheckIn</a>
                                              
                                             <?php }
                                             if($data['Status']=="CheckedIn")
                                             {?>
                                                <a href="Rooms/checkout.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-danger">Checkout</a>
                                                <?php
                                             }
                                             ?>
                                             <?php
                                             if($data['Status']=="CheckedOut")
                                             {?>
                                                 <a href="Rooms/remove.php?date=<?php echo $data['id']; ?>" type="button" class="btn btn-danger mt-1">Remove</a>
                                                <?php
                                             }
                                             ?>
                                            </td>
                                         <!-- <td><a href="Rooms/checkout.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-danger">Checkout</a></td> -->

                                    </tr>
                            <?php
                                }
                            }

                            ?>



                            <tr>

                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    </div>

    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>

    <?php
}
else
{
    header("Location: Home/index.php");
    exit;
}
?>



// $_SESSION['test']="";
// $test=true;
// $test=$_SESSION['test'];
// unset($_SESSION['test']);
?>
<?php

?>
    