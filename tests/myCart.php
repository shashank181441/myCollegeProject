<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My CArt</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
  if (!isset($_SESSION['$cartItems'])) {
    echo "No items";
  }
  ?>
  <div class="row m-3">
    <div class="col col-2"></div>
    <div class="col col-6">
      <table class="table col col-6">
        <?php
        foreach ($_SESSION["products"] as $products) {
          echo "hello";
          if ($products['id'] != $prevID) {
          echo "You have added items from two restaurants";}
        ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $products['food_name']; ?></th>
            <td><?php echo $products['food_price']; ?>
            </td>
          </tr>
        </tbody><?php 
    $prevID = $products['id'];}?>
      </table>
    </div>
    <?php
    ?>
</body>
</html>
<?php
print_r($_SESSION["products"]);
// print_r($_SESSION);
echo "helo";
// session_destroy();
?>
<a href="tables.php">tables</a>

