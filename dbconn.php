<?php

$server="localhost";
$user="root";
$password="";
$databasename="food_ordering_system";

$conn=mysqli_connect($server,$user,$password,$databasename);

 if($conn){
     ?>

<script>
    alert("connection successful");
</script>

<?php
 }else{
   ?>
   <script>
      alert("no connection");
    </script>
<?php

 }
      
?>