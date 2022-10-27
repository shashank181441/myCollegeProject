<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Categoies</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php include "nav/nav.php";
    ?>
    <form action="" method="post" enctype="multipart/form-data" novalidate>
        <div class="row row-cols-1  row-cols-lg-2 row-cols-md-2 gy-2">

            <div class="col">
                <div class="form-floating">
                    <input type="text" id="food_name" name="food_name" class="form-control" placeholder="name" required>
                    <label for="name">Food's Name</label>
                </div>
            </div>

            <div class="form-floating">
                <input type="number" id="price" name="price" class="form-control" placeholder="price" required>
                <label for="price">Price</label>
            </div><br>
        </div>
        

        <button class="position-relative bottom-0 start-50 translate-middle-x px-4 py-2 mb-3 mt-2 btn btn-info" type="submit" name="rest_bt">Send Message</button>
    </form>

    <?php include "footer.php";
    ?>

    <?php

    
    include "dbconn.php";
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/" . $filename;
    echo $folder;
    move_uploaded_file($tempname, $folder);
    $insertquery="INSERT INTO add_rest(menus) VALUES ('$myJSON')";
      $iquery= mysqli_query($conn,$insertquery);
      echo $iquery;
    ?>
</body>

</html>