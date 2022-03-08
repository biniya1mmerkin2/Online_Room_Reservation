<?php
session_start();

if(isset($_SESSION['usernamelogin']) && isset($_SESSION['passwordlogin']))
{
  require_once 'header.php';
  if(isset($_GET['id']))
  {
  
  }
  ?>
  <?php
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
 <div class="container-fluid row justify-content-center mt-4">
        <div class="col-6  ">
            <form action="PHP/deleteaccomodation.php" method="POST">
            <table class="table table-striped bg-light table-hover">
                <thead>
                    <th>ID</th>
                    <th>Accomodation</th>
                    <th>Description</th>
                    <th >Action</th>
                </thead>
                 
                <?php
                            require_once 'PHP/connection.php';
                            $sql="SELECT *FROM accomodationtable";
                            $result=mysqli_query($conn,$sql);
                            while($data=mysqli_fetch_array($result))
                            {
                ?>
                                <tr>
                                
                                <td>
                               <input type="checkbox" name="select[]" value="<?php $data['id']; ?>">
                                </td>
                                <td>
                                <?php
                                echo $data['accomodation'];
                                ?>
                                </td>
                                <td>
                                <?php
                                echo $data['description'];
                                // echo "\n";
                                ?>
                            </td>
                            <td> <a class="btn btn-primary" id="addnewroom" href="Accomodation/accomodation.php?id=<?php echo$data['id'] ?>"  role="button">Edit</a></td>
                                
                         </tr>

                         <?php
                            }
                         ?>
                      <tr>
                            
                            </tr>
                
            </table>
            
            <a class="btn btn-success" id="addnewroom" href="Accomodation/accomodation.php"  role="button">Add</a>
            <button type="submit"  value="Delete" name="deleteacco" class="btn btn-danger">Delete</button>
        </form>

        </div>
        
    </div>


  
    
    
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
else
{
  header("Location:Home/index.php");
  exit;
}
?>

  