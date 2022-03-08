<?php
session_start();
 if(isset($_SESSION['usernamelogin']) && isset($_SESSION['passwordlogin']))
 {
    
    require_once 'header2.php';
    require_once '../PHP/connection.php';

    
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
}?>
<form action="../PHP/continuebooking.php" method="post">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-cart ms-3"></i>Cart Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">CheckIn Date</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Accomodation</th>
      <th scope="col">Room Price</th>
      <th scope="col">Number of Days</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php 
      if(isset($_SESSION['chin']))
      {
         echo $_SESSION['chin'];
      }
      else
      {
        echo $_SESSION['chin']="";
      }
      ?></td>
      <td><?php if(isset($_SESSION['roomname']))
      {
         echo $_SESSION['roomname'];
      }
      else
      {
        echo $_SESSION['roomname']="";
      } ?></td>
      <td><?php if(isset($_SESSION['acco']))
      {
         echo $_SESSION['acco'];
      }
      else
      {
        echo $_SESSION['acco']="";
      } ?></td>
      <td><?php if(isset($_SESSION['price']))
      {
         echo $_SESSION['price'];
      }
      else
      {
        echo $_SESSION['price']="";
      } ?></td>
      <td><?php if(isset($_SESSION['numberofdays']))
      {
         echo $_SESSION['numberofdays'];
      }
      else
      {
        echo $_SESSION['numberofdays']="";
      } ?></td>
    </tr>
   
    </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <a href="cancelbooking.php"><button type="button" class="btn btn-secondary" >Cancel Booking</button></a>
        <button type="submit" class="btn btn-primary">Continue Booking</button>
      </div>
    </div>
  </div>
</div>

</form>

<section class="wellness bg-light cc-margin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <h2 class="card-title display-4">Capital Wellness</h2>
                        <p class="card-text">Five Star Hotel class rich & superior Gym and SPA services along with an amazing Swimming Pool covers all services for your body, mind, & beauty. The services are rendered on separate floors for ladies & gentlemen.</p>
                    </div>
                </div>
                <div class="col-6 d-none d-md-block">
                    <img src="img/spa2.jpg" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="dining my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 d-none d-md-block">
                    <img src="img/d.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <h2 class="card-title display-4">Breakfast</h2>
                        <p class="card-text">Five Star Hotel class rich & superior Gym and SPA services along with an amazing Swimming Pool covers all services for your body, mind, & beauty. The services are rendered on separate floors for ladies & gentlemen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services cc-margin text-secondary" id="ourservice">
        <div class="container text-center">
            <h1 class="display-3 mb-4">Our Services</h1>
            <div class="row">
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-swimmer"></i>
                        </h1>
                        <p class="card-text fw-bold">Swimming Pool</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-bed"></i>
                        </h1>
                        <p class="card-text fw-bold">Bed</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-wifi"></i>
                        </h1>
                        <p class="card-text fw-bold">Wifi</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-cocktail"></i>
                        </h1>
                        <p class="card-text fw-bold">MiniBar</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-shuttle-van"></i>
                        </h1>
                        <p class="card-text fw-bold">Car Airport</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-dumbbell"></i>
                        </h1>
                        <p class="card-text fw-bold">Gym</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-utensils"></i>
                        </h1>
                        <p class="card-text fw-bold">Restaurant</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-body text-center">
                        <h1 class="display-1">
                            <i class="fas fa-parking"></i>
                        </h1>
                        <p class="card-text fw-bold">Parking</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="bootstrap.min.js"></script>
</body>

</html>

<?php
 }
 else
 {
     header("Location: login.php");
     exit;
 }
  
  // $acco1 =$_SESSION['acco'];
?>



