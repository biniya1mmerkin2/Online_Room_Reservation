<?php
require '../PHP/connection.php';
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Rooms</title>
    <style>
        #navigate #nav a:hover {
            background: black;
        }
    </style>

</head>

<body>
    <div class="container-fluid bg-dark">
        <nav class=" navbar  navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid  ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav " id="navigate">
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="../roommain.php">Rooms</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="../accomodationmain.php">Accomodation</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="../RoomReservation.php">Reservation</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="#">Reports</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="#">User</a>
                        </li>
                        <li class="nav-item pe-1 ps-1" id="nav">
                            <a class="nav-link active" aria-current="page" href="#">Logout</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>


    </div>

    <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="SELECT *FROM accomodationtable WHERE id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result)
        $data=mysqli_fetch_array($result);
        ?>
        <div class="container-fluid ">
        <div class="container p-5  ">
            <div class="row justify-content-center bg-light m-2">
                <div class="col-6">
                    <fieldset>
                        <legend>Edit
                        </legend>
                        <form action="../PHP/updateaccomodation.php" method="POST" >

                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <label for="accomodation" class="form-label">Accomodation</label>
                            <input type="text" class="form-control " value="<?php echo $data['accomodation']; ?>" name="accomodation" id="accomodation">
                            <label for="description" class="form-label">Description</label>

                            <input type="text" class="form-control" value="<?php echo $data['description']; ?>" name="description" id="description">
                            <input type="submit" name="upload" value="Update" class="btn btn-primary m-3">
                        </form>


                    </fieldset>
                </div>
            </div>

        </div>
    </div>

    </div>
<?php
    }
    else{
    ?>

    

    <div class="container-fluid ">
        <div class="container p-5  ">
            <div class="row justify-content-center bg-light m-2">
                <div class="col-6">
                    <fieldset>
                        <legend>ADD Accomodation
                        </legend>
                        <form action="../PHP/accomodationphp.php" method="POST" >

                            <label for="accomodation" class="form-label">Accomodation</label>
                            <input type="text" class="form-control " name="accomodation" id="accomodation">
                            <label for="description" class="form-label">Description</label>

                            <input type="text" class="form-control" name="description" id="description">
                            <input type="submit" name="upload" value="ADD" class="btn btn-primary m-3">
                        </form>


                    </fieldset>
                </div>
            </div>

        </div>
    </div>

    </div>
    <?php
    }
    ?>

    <script src="bootstrap.min.js"></script>
</body>

</html>