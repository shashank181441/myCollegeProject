<?php 
session_start();

// check if submit button is clicked


     
    //   if(isset($_POST["rest_bt"]))
    // {
         include "../dbconn.php";
        $rest_name=$_POST["rest_name"];
        $details=$_POST["details"];
        $lat = $_POST["lat"];
        $long = $_POST["long"];
        $cood = $lat+$long;
        ?>
            <script>alert("db conn")</script>
        <?php
    //   upload photo

      $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    $folder = "../images/".$filename;
    echo $folder;
    move_uploaded_file($tempname, $folder);

    $myJSON = json_encode($myArr);

    $email = $_SESSION["email"];
      
    // upload to database
      $insertquery="INSERT INTO add_rest(Email, rest_name, logo, lattitude, longitude,details,cood_add,menus) VALUES ('$email','$rest_name','$folder','$lat','$long','$details','$cood','$myJSON')";
      $iquery= mysqli_query($conn,$insertquery);
      echo $iquery;



      header("location: food_table.php");

      
// }
?>