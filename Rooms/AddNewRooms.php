<?php
require '../PHP/connection.php';

if(isset($_GET['id']))
{

    $id=$_GET['id'];
    $sql="SELECT *FROM tblroom WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        while($data=mysqli_fetch_array($result))
        {
            $roomname=$data['roomname'];
            $accomodation=$data['accomodation'];
            $numberofperson=$data['numberofperson'];
            $price=$data['price'];
            $image=$data['image'];
        }
    }

}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                            <a class="nav-link active" aria-current="page" href="">Reservation</a>
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
                ?>

                
    <div class="container-fluid ">
    <div class="container p-5  ">
        <div class="row justify-content-center">
            <div class="col-6">
                <fieldset>
                    <legend>Update
                    </legend>
                    <form action="../PHP/updateroom.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <label for="roomname" class="form-label">Room Name </label>
                    <input type="text" value="<?php echo $roomname; ?>" name="name"class="form-control " id="roomname">
                    <label for="accomodation" class="form-label">Accomodation</label>
                    <select name="accomodation"value="4" name="accomodation" class="form-select" id="accomodation">
                        <!-- <option value=""><?php echo $accomodation; ?></option> -->
                        <?php
                            require_once '../PHP/connection.php';
                            $result=mysqli_query($conn,"SELECT *FROM accomodationtable");
                            while($data=mysqli_fetch_array($result))
                            {
                                ?>
                                
                                <option value="<?php echo $data['accomodation'].''.$data['description']; ?>"><?php echo $data['accomodation'].''.$data['description']; ?></option>
                                <?php

                            }
                            ?>
                    </select>
                    <label for="numberofperson" class="form-label">Number of person</label>
                    <input type="number" value="<?php echo $numberofperson; ?>" name="persons" class="form-control" id="numberofperson">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" value="<?php echo $price; ?>" name="price" class="form-control" id="price">
                    <input type="file" name="image" class="form-control mt-3 mb-2" id="formfile">
                    <p><img src="../image/<?php echo $image; ?>" height="200px" width="200px" alt=""></p>
                    <input type="submit" value="Update"name="upload" class="btn btn-primary m-3">
                    
                    </form>

                </fieldset>
            </div>
        </div>

    </div>
</div>
         <?php   }

         else{
            ?>

    <div class="container-fluid ">
        <div class="container p-5  ">
            <div class="row justify-content-center">
                <div class="col-6">
                    <fieldset>
                        <legend>ADD New Room
                        </legend>
                        <form action="../PHP/addroom.php" method="POST" enctype="multipart/form-data">

                        <label for="roomname" class="form-label">Room Name</label>
                        <input type="text" name="name"class="form-control " id="roomname">
                        <label for="accomodation" class="form-label">Accomodation</label>
                        <select name="accomodation" name="accomodation" class="form-select" id="accomodation">
                            <option value="">None</option>
                            <?php
                            require_once '../PHP/connection.php';
                            $result=mysqli_query($conn,"SELECT *FROM accomodationtable");
                            while($data=mysqli_fetch_array($result))
                            {
                                ?>
                                
                                <option value="<?php echo $data['accomodation'].''.$data['description']; ?>"><?php echo $data['accomodation'].''.$data['description']; ?></option>
                                <?php

                            }
                            ?>
                            
                            
                        </select>
                        <label for="numberofperson" class="form-label">Number of person</label>
                        <input type="number" name="persons" class="form-control" id="numberofperson">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="price">
                        <input type="file" name="image" class="form-control mt-3" id="formfile">
                        <input type="submit" value="New Room"name="upload" class="btn btn-primary m-3">
                        </form>

                    </fieldset>
                </div>
            </div>

        </div>
    </div>
    <?php
    }
    ?>

    </div>

    <script src="bootstrap.min.js"></script>
</body>

</html>