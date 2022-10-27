<?php
$id = $_GET['id'];
?>

<script>
  function id() {
    let rest_id = <?php $id; ?>;
    document.getElementById("ids").value = rest_id;
  }
</script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Restaurant</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

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
      // print_r($row);
  ?>
      <?php 
      include 'nav/nav.php'; ?>
      <script>
        alert("hello");
      </script>

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
                <form action="" method="POST">
                  <div class="row">


                    <div class=" mb-3">
                      <label for="newCat" class="col-form-label">newCat:</label>
                      <input type="text" class="form-control" id="newCat" name="newCat" required>
                    </div>
                    <!-- <input type="text" name="ids" id="ids"> -->

                    <button type="submit" class="btn btn-primary mb-3" name="bt2">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php


        if (isset($_POST["newCat"])) {
          $name = $_POST['newCat'];
          // $id = $_POST['ids'];



          $sql = "INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES ('$id', '$name')";
          $result = mysqli_query($conn2, $sql);
          header("location:myRestaurantForms.php");
        }

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
        <button style="width:200px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@getstrap">add Food</button>



        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new categories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" method="POST">
                  <div class="row">


                    <div class=" mb-3">
                      <select name="category" id="category">
                        <?php
                        $sqlForSelect = "SELECT * from categories where cat_id = $id ";
                        $resultForSelect = mysqli_query($conn2, $sqlForSelect);
                        if (mysqli_num_rows($resultForSelect) > 0) {
                          while ($row = mysqli_fetch_assoc($resultForSelect)) {
                        ?><option value="<?php echo $row['cat_name']; ?>">
                              <?php echo $row['cat_name']; ?></option>
                        <?php
                          }
                        }
                        ?>
                      </select>
                      <label for="newCat" class="col-form-label">Food name:</label>
                      <input type="text" class="form-control" id="newFood" name="newFood" required>
                    </div>
                    <div class=" mb-3">
                      <label for="newCat" class="col-form-label">Price:</label>
                      <input type="number" class="form-control" id="foodPrice" name="foodPrice" required>
                    </div>
                    <div class=" mb-3">
                      <label for="newCat" class="col-form-label">Image:</label>
                      <input type="file" class="form-control" id="images" name="images" required>
                    </div>


                    <!-- <input type="text" name="ids" id="ids"> -->

                    <button type="submit" class="btn btn-primary mb-3" name="bt2">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php


        if (isset($_POST["newFood"])) {
          $name = $_POST['newFood'];
          $price = $_POST['foodPrice'];
          $image = $_POST['images'];
          $category = $_POST['category'];
          // $id = $_POST['ids'];


          // $conn2 = mysqli_connect('localhost', 'root', '', 'food');
          $sql = "INSERT INTO `rest_$id` (`food_name`, `food_price`,`food_image`,`food_category`) VALUES ( '$name','$price','$image')";
          $result = mysqli_query($conn2, $sql);
          header("location:myRestaurantForms.php");
        }
        
        ?>
        <div class="row m-3">
        <div class="col col-2"></div>
        <div class="col col-6">
            <table class="table col col-6">
                <?php
       


        $conn2 = mysqli_connect("localhost", "root", "", "food");


        $sql = "select * from rest_$id order by food_category";
        $result = mysqli_query($conn2, $sql);

        

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['food_category'] != $cat) {

        ?>
                <thead class="thead-dark">
                    <tr class=" table-warning">
                        <th scope="col">
                            <?php echo $row['food_category'];
                    $cat = $row["food_category"]; ?></th>
                        <td></td>
                    </tr>
                </thead><?php
                    } ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $row['food_name']; ?></th>
                        <td><?php echo $row['food_price']; ?>
                            <form action="" method="post">
                                <div>
                                    <input type="text" name="food_name" value="<?php echo $row['food_name'] ?>" hidden>
                                    <input type="text" name="food_price" value="<?php echo $row['food_price'] ?>" hidden>
                                    <input type="text" name="food_id" value="<?php echo $row['food_id'] ?>" hidden>
                                    <input type="text" name="id" value="<?php echo $id ?>" hidden>
                                </div>
                                <button class="btn btn-primary ml-1" name="addCart" type="submit">+</button>
                            </form>
                        </td><?php
                      
                      if (isset($_POST["addCart"])) {
                        $food_name = $_POST['food_name'];
                        $food_price = $_POST['food_price'];
                        $food_id = $_POST['food_id'];
                        $id = $_POST['id'];
                        $products = array('food_name' => $food_name,'food_price' => $food_price,'food_id' => $food_id, 'id' => $id);
                        $_SESSION['products'][$food_name]= $products; 
                      }
                    }
                  } ?>
                        <a href="tests/myCart.php">cart</a>

                    </tr>

                </tbody>
            </table>
        </div>
        

    <?php
    }
  }
    ?>
    <?php require 'footer.php' ?>


</body>

</html>
