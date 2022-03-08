
<?php
require_once 'PHP/connection.php';

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Rooms</title>
    <style>
        #navigate #nav a:hover {
            background: black;
        }
    </style>

</head>

<body>
    <?php
    $sql = "SELECT *FROM userinfo WHERE identify='0'";
    $result1 = mysqli_query($conn, $sql);
    $newmessage;
    $data1 = mysqli_num_rows($result1);


    ?>
    <div class="container-fluid bg-dark sticky-top">
        <nav class=" navbar  navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid  ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav " id="navigate">
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="roommain.php">Rooms</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="accomodationmain.php">Accomodation</a>
                        </li>

                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="RoomReservation.php">Reservation <span class="position top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    <?php
                                    echo $data1;
                                    ?>
                                    <span class="visually-hidden">unread messages</span>
                                </span></a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="users.php">Users</a>
                        </li>
                      
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>