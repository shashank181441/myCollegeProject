<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic table</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="row m-3">
        <div class="col col-2"></div>
        <div class="col col-6">
            <table class="table col col-6">
                <?php
        $id = 64;


        $conn = mysqli_connect("localhost", "root", "", "food");


        $sql = "select * from rest_$id order by food_category";
        $result = mysqli_query($conn, $sql);

        echo $sql;

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
                        <a href="myCart.php">cart</a>

                    </tr>

                </tbody>
            </table>
        </div>
</body>

</html>