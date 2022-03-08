<?php

    session_start();
    require_once 'header.php';
    require_once '../PHP/connection.php';
    $acco1 =$_SESSION['acco'];
    $person=$_SESSION['person'];



?>
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
    
<section class="check-room mt-5">
    <div class="container">
        <h2 class="fs-3">Avaliable Room</h2>
        <form action="login.php" method="get">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
    $sql = "SELECT *FROM tblroom WHERE accomodation='$acco1' && numberofperson='$person'";
    $result = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($result)) { ?>

          
               
          
                    
                    <div class="col">
                    <div class="card">
                    <?php ?>
                   
                <img src="../image/<?php echo $data['image'] ;
                ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" name="roomname">Room Name:<?php echo $data['roomname']; ?></h5>
                    <h6 class="card-title" name="price">Room Price:<?php 
                    
                    echo"$".$data['price']; ?></h6>

                    <?php
                       $_SESSION['roomname']=$data['roomname'];
                             $_SESSION['price']=$data['price'];
                             ?>
                </div>
               
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    
                    </div>
                    <input type="submit" name="setsession" class="btn btn-primary" value="Book Know">
            </div>
            
           
           
           
            <?php
    }
            ?>
            </div>

        </form>
       
    </div>
</section>

<section class="about-us mt-5">
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 290"><path fill="#f5f5f5" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,149.3C384,149,480,139,576,122.7C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container">
            <h2 class="display-4 mb-5 text-center text-light ">Testimonials</h2>
            <div class="cc-row">
                <div class="cc-col shadow">
                    <img src="img/t1.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Misikir Mengis</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima autem optio enim sint facere sit dolorem debitis cumconsectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="cc-col shadow">
                    <img src="img/t3.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Biniyam Merkin</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima autem optio enim sint facere sit dolorem debitis cumconsectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="cc-col shadow">
                    <img src="img/t2.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Misael Desaglenr</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima autem optio enim sint facere sit dolorem debitis cumconsectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="cc-col shadow">
                    <img src="img/t4.jpg" class="cc-img" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Misael Desaglenr</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima autem optio enim sint facere sit dolorem debitis cumconsectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 290"><path fill="#f5f5f5" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,149.3C384,149,480,139,576,122.7C672,107,768,85,864,106.7C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
    </section>
    <section class="contact-us mb-5">
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
                <div class="col-md-6">
                    <p class="fs-3 mb-3 text-center"> Contact Info</p>
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fs-1 me-3 fa-map-marker-alt"></i>
                        <p class="mb-0">203 Fake St. Mountain View,<br> San Francisco, California, USA</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center  mb-4">
                        <i class="fas fs-2 me-3 fa-phone-alt"></i>
                        <p class="mb-0">203 Fake St. Mountain View,<br> San Francisco, California, USA</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fs-2 me-3 fas fa-envelope"></i>
                        <p class="mb-0">HopeHotel458@domain.com</p>
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
</body>
</html>