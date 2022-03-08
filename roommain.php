<?php
session_start();

if(isset($_SESSION['usernamelogin']) && isset($_SESSION['passwordlogin']))
{
    require_once 'header.php';
    ?>
    <div>
    <P style="color: red;"><?php
    if(isset($_GET['error']))
    echo $_GET['error']; ?></P>
</div>
<div class="container-fluid ">
    <div class="container p-5  ">
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="PHP/deleteRoomInfo.php" method="POST">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">Accomodation</th>
                                <th scope="col">Person</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT *FROM tblroom";
                            $result = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="deleteData[]" value="<?php echo $data['id']; ?>"></td>
                                    <td scope="row"><img width="100px" height="50px" src="image/<?php echo $data['image']; ?>" alt=""></th>
                                    <td><?php echo $data['roomname']; ?></td>
                                    <td><?php echo $data['accomodation']; ?></td>
                                    <td><?php echo $data['numberofperson']; ?></td>
                                    <td>$<?php echo $data['price']; ?></td>
                                    <td> <a class="btn btn-primary" id="addnewroom" href="Rooms/AddNewRooms.php?id=<?php echo$data['id'] ?>"  role="button">Edit</a></td>

                                </tr>


                            <?php

                            }
                            ?>
                            <tr>

                            </tr>


                        </tbody>
                    </table>
                    <td> <a class="btn btn-success" id="addnewroom" href="Rooms/AddNewRooms.php"  role="button">Add</a>
                        <button type="submit" id="deleteroom" value="Delete" name="delete" class="btn btn-danger">Delete</button>
                        <!-- <button type="button" class="btn btn-primary" >Edit
                        </button> -->
                    </td>
                </form>

            </div>
        </div>

    </div>
    <div class="container-fluid row justify-content-center">
        <div class="col-6">

        </div>
    </div>
</div>


      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

</div>
<script src="/jsFile/changeButtonImage.js"></script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>

}

<?php
// $_SESSION["error"]="";
}
else
{
    header("Location: Home/index.php");
    exit;
}

?>

