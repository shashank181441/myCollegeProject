


<?php
            
            if (isset($_POST["newCat"])) {
              $name = $_POST['newCat'];
              $id = $_POST['ids'];

              $conn = mysqli_connect('localhost', 'root', '', 'food');
              $sql = "INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES ('$id', '$name')";
              $result = mysqli_query($conn, $sql);
              header("location: myRestaurant.php?id=<?php echo $id?>");
            }

            ?>