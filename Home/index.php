<?php
session_start();
require_once '../PHP/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>WebProject</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"> <span class="logo">HopeHotel</span></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ourservice">Our Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="cc-nav-right d-flex align-items-center">
                    <a class="btn ms-2 btn-light fw-bold px-3 cc-hover d-none d-md-inline-block" href="login.php">Login</a>
                    </a>
                </div>

            </div>
        </nav>
    </header>
    <section class="showcase">
        <div class="row">
            <div class="col-12">
                <video class="w-100" muted autoplay loop="true" src="vid/video.mp4"></video>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title display-1">A View to Die For</h5>
                <p class="card-text">Perfert for your stay</p>
            </div>
        </div>
    </section>

    
    <?php 
                       if(isset($_GET['error'])){?>
                       <div class="alert alert-danger" role="alert">
                       <?php echo $_GET['error'];?>
                        </div>
                        <?php
                       }
                        ?>


    <section class="check-in-out mb-5">
        <div class="container">
            <div class="row g-3 justify-content-center py-sm-4 rounded shadow bg-light">
                <div class="col-md-auto">
                    <form action="../PHP/checkDate.php" method="POST">
                        <input type="date" name="chin" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="Check In">
                        <p style="color: red;"></p>
                </div>
                <div class="col-md-auto">
                    <input type="date" name="chout" min="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Check out">
                </div>
                <div class="col-md-auto">
                    <select class="form-select" name="acco" aria-label="Default select example">
                    <?php
$sql='SELECT *FROM accomodationtable';
$result=mysqli_query($conn,$sql);
if($result)
{
    while($data=mysqli_fetch_array($result))
    {
        ?>
        <option value="<?php echo $data['accomodation'].''.$data['description'] ?>"><?php echo $data['accomodation'].''.$data['description'] ?></option>
    
        <?php
    }
}

    ?>
                          </select>
                </div>
                <div class="col-md-auto">
                    <select class="form-select" name="numberofperson" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="5">5</option>
                          </select>
                </div>
                <div class="col-md-auto">
                    <input type="submit" name="upload" class="btn btn-dark px-5 mb-2" value="check" />

                    </form>

                </div>
            </div>
        </div>
    </section>
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
    <section class="gallery my-5 cc-margin">
      <h2 class="fs-1 text-center text-secondary mb-5">Our Gallery</h2>
      <div class="container">
        <div class="d-flex cc-f">
          <div class="col-f">
            <div class="g-desc text-center">
              <span class="fs-2 fw-bold text-dark bg-light px-4 rounded"
                >MINI BAR</span
              >
            </div>
          </div>
          <div class="col-f">
            <div class="g-desc text-center">
              <span class="fs-2 fw-bold text-dark bg-light px-4 rounded"
                >GYM</span
              >
            </div>
          </div>
          <div class="col-f">
            <div class="g-desc text-center">
              <span class="fs-2 fw-bold text-dark bg-light px-4 rounded"
                >RESTORANT</span
              >
            </div>
          </div>
          <div class="col-f">
            <div class="g-desc text-center">
              <span class="fs-2 fw-bold text-dark bg-light px-4 rounded"
                >MEETING HALL</span
              >
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="about-us" id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 d-none d-md-block">
                    <div class="card-body">
                        <h2 class="card-title display-4">About Us</h2>
                        <hr class="hr">
                        <p class="card-text">Five Star Hotel class rich & superior Gym and SPA services along with an amazing Swimming Pool covers all services for your body, mind, & beauty. The services are rendered on separate floors for ladies & gentlemen.</p>
                    </div>
                </div>
                <div class=" col-12 col-md-6">
                    <img src="img/about.jpg" class="img-fluid rounded" alt="">
                </div>

            </div>
        </div>
    </section>
    <section class="testimonial pb-5 cc-margin">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240"><path fill="#f5f5f5" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,149.3C384,149,480,139,576,122.7C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container">
            <h2 class="display-4 mb-5 text-center text-light ">Testimonials</h2>
            <div class="cc-row pb-5">
                <div class="cc-col">
                    <img src="img/t1.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Misikir</h5>
                        <p class="card-text cc-card-text"> <q>The service here has just been fantastic; whatever we needed was brought to us right away. Our event coordinator was amazing, she has been most helpful. The food was so delicious; the entire experience was really great.  </q></p>
                    </div>
                </div>
                <div class="cc-col ">
                    <img src="img/t3.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Biniyam</h5>
                        <p class="card-text cc-card-text"> Good day! We would like to thank you for your sincere efforts and support in success of our recent Parts Conference held in your Hotel. Outstanding support was received from you, your team which is highly appreciated. .
</p>
                    </div>
                </div>
                <div class="cc-col ">
                    <img src="img/t2.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dawit</h5>
                        <p class="card-text cc-card-text"> We very much appreciate the efforts and efficiency of all your staff during all parts of the meeting. If we have the opportunity to have a meeting in Thailand in the near future, we will certainly get in touch with the hotel. </p>
                    </div>
                </div>
                <div class="cc-col ">
                    <img src="img/t4.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bereket</h5>
                        <p class="card-text cc-card-text"> This is one of my favourite hotel in Pattaya and I regularly use the resort’s tennis courts for practice. Not only does the hotel have excellent sport facilities but the quality of the rooms and services are outstanding</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 290"><path fill="#f5f5f5" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,149.3C384,149,480,139,576,122.7C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
    </section>
    <section class="contact-us mb-5" id="contactus">
        <div class="container">
            <h1 class="display-3 text-center mb-5">Contact Us</h1>
            <div class="row g-5 align-items-center">
                <div class="col-md-6">
                    <p class="fs-3">Leave Your Comment</p>
                    <form>
                        <div class="mb-3">
                            <label for="Full Name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="Full Name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary px-5 ">Send</button>
                    </form>
                </div>
                <div class="col-md-6" >
                    <p class="fs-3 mb-3 text-center"> Contact Info</p>
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fs-1 me-3 fa-map-marker-alt"></i>
                        <p class="mb-0">Addis Abeba, Ethiopia<br> </p>
                    </div>
                    <!-- <div class="d-flex align-items-center justify-content-center  mb-4">
                        <i class="fas fs-2 me-3 fa-phone-alt"></i>
                        <p class="mb-0">Addis abeba,<br> San Francisco, California, USA</p>
                    </div> -->
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fs-2 me-3 fas fa-envelope"></i>
                        <p class="mb-0">hopehotel@gmail.com</p>
                    </div>
                    <div class="mt-3 text-center">
                        <a href=""><i class="fab text-secondary fs-3 fa-facebook-square"></i></a>
                        <a href=""><i class="fab text-secondary mx-2 fs-3 fa-instagram-square"></i></a>
                        <a href=""><i class="fab text-secondary fs-3 fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <footer class="bg-dark py-3 text-center text-light">Copy@</footer>

    <script src="bootstrap.min.js"></script>
</body>

</html>