<?php
session_start();
if(isset($_SESSION['usernamelogin']) && isset($_SESSION['passwordlogin']))
{

  // unset($_SESSION['usernamelogin']);
  // unset($_SESSION['passwordlogin']);

  require_once 'header.php';
  ?>

  <div class="container-fluid  ">

<div class="container-fluid ">

  <div class="row justify-content-center ">
    <div class="col-8 ">
      <div class="accordion justify-content-center " id="accordionExample">
        <div class="accordion-item m-2 border-1 ">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Rooms
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>The guest house has got various rooms that are categorised accordion to types. Each room is of particular category and have a maximum number of Adults and Children that can be accomodated</p>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item m-2 border-1 ">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accomodation
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>This consists of the categories of rooms that in this Hotel. Each Category of rooms Has got unique features different form the other. For view all of the categories of all types of rooms</p>
          </div>
        </div>
      </div>

      <div class="accordion-item m-2 border-1 ">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Reservation
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>In this area, you can view all the reservation transaction of all guest. And this area allow the the receptionist confirm the request of guest or either to cancel the reservation.</p>
          </div>
        </div>
      </div>



      <!-- <div class="accordion-item m-2 border-1 ">
        <h2 class="accordion-header" id="headingfour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
            User
          </button>
        </h2>
        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>The system displays the list of all people that have been registered in to the system.If a particular user is logged in the system the, such as users record is does not appear in the list of records. To view all the registered other than the logged in use.</p>
          </div>
        </div>
      </div> -->

      <div class="accordion-item m-2 border-1 ">
        <h2 class="accordion-header" id="headingfive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
            Reports
          </button>
        </h2>
        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>In this page the report of the user generated in pdf.</p>
          </div>
        </div>
      </div>


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
  header("Location: Home/login.php");
  exit;
}
?>
 