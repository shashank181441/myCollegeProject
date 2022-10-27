<?php
$id = $_GET['id'];
?>

<script>
  let rest_id = <?php $id;?> ;
  document.getElementById("ids").value = rest_id;
</script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Restaurant</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
  <?php
  include "dbconn.php";
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM add_rest where rest_id = '$id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      print_r($row); ?>

      ?>
      <?php require 'nav/nav.php ' ?>


      <div class="container-fluid">
        <div class="row">
          <div class="col col-12" style="height: 60vh;">
            <img class="col-12" src="images/backgroundForAboutUs.jpg" alt="error" width="100%" height="100%" style="object-fit:cover;">
          </div>

          <div class="row">
            <div class="col col-1"></div>
            <div class="col col-6 text-left">
              <h1 class="text-left"><?php echo $row['rest_name'] ?></h1>
              <p class="text"><?php echo $row['details'] ?> <br>
                Motihari Locality, Motihari</p>
              <div>
                <button class="btn btn-primary">Reviews</button>
                <button class="btn btn-primary">place Order</button>
                <button class="btn btn-primary">Location</button>
              </div>
            </div>
            <h3 class="text mt-3">categories</h3>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@getstrap">addCat</button>



            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new categories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="backend/myRestaurantForms.php" method="POST">
                      <div class="row">


                        <div class=" mb-3">
                          <label for="newCat" class="col-form-label">newCat:</label>
                          <input type="text" class="form-control" id="newCat" name="newCat" required>
                        </div>
                        <input type="text" name="ids" style="visibility:hidden">

                        <button type="submit" class="btn btn-primary mb-3" name="bt2">Add</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php
            // if (isset($_POST["newCat"])) {
            //   $name = $_POST['newCat'];

            //   $conn = mysqli_connect('localhost', 'root', '', 'food');
            //   $sql = "INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES ('$id', '$name')";
            //   $result = mysqli_query($conn, $sql);
            // }

            ?>


            <form action="myRestaurant.php" method="post" class="row m-1 text-center">
              <div class="mb-3 col col-4">
                <select class="form-select" name="categories" id="categories">
                  <option value="">Momos</option>
                  <option value="">Chaumein</option>
                  <option value="">Meals</option>
                </select>
              </div>
              <div class="col col-2"></div>
              <div class="col col-1 mr-4 my-2 form-check">
                <input class="form-check-input" type="checkbox" value="veg" id="veg">Veg

              </div>
              <button class="col col-2 btn btn-primary" type="submit">Submit</button>
            </form>
            <div class="row m-3">
              <div class="col col-2"></div>
              <div class="col col-6">
                <table class="table col col-6">
                  <thead class="thead-dark">
                    <tr class=" table-warning">
                      <th scope="col">Momos</th>
                      <td></td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Veg Momo</th>
                      <td>Price
                        <button class="btn btn-primary ml-1">+</button>
                      </td>

                    </tr>
                    <tr>
                      <th scope="row">Chicken Momo</th>
                      <td>Price
                        <button class="btn btn-primary ml-1">+</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Buff Momo</th>
                      <td>Price
                        <button class="btn btn-primary ml-1">+</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>


              <div class="col col-1"></div>
            </div>
          </div>

      <?php
    }
  } ?>
      <?php require 'footer.php' ?>


      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>