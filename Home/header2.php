
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>WebProject</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Hope Hotel</a>

                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="cc-nav-right d-flex align-items-center">  
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-envelope"></i> Message
                                </a> -->
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <?php
                                    $user=$_SESSION['username'];
                                    $sql2="SELECT *FROM userinfo WHERE user='$user'";
                                    $result2=mysqli_query($conn,$sql2);
                                    if(mysqli_num_rows($result2)>0)
                                    {?>
                                    <?php
                                    while($data=mysqli_fetch_array($result2))
                                    {
                                    ?>
                                    <li><a class="dropdown-item" href="#"><?php echo $data['message'];?></a></li>
                                    <?php
            }
          }
          
          
            else
            {
              ?>
              
              <li><a class="dropdown-item item-primary" href="#"><i class="fas fa-sad-cry"></i>No message yet!</a></li>
             <?php
            }
            ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="#" style="text-decoration: none; color:whitesmoke"><i class="bi bi-person-fill ms-2"><span><?php 
                    if(isset($_SESSION['username']))
                    {
                        echo $_SESSION['username']; 
                    }
                    else
                    {
                        echo "";
                    }
                    ?></span></i></a>

                    <!-- </a> -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none; color:whitesmoke"><i class="bi bi-cart ms-3"></i><span> Your Cart Info</span></i></a>
                    <a href="../PHP/logout.php" style="text-decoration: none; color:whitesmoke"><i class="bi bi-person-fill ms-2"</i><span> LogOut</span></i></a>
                </div>
               

            </div>
        </nav>
    </header>
    