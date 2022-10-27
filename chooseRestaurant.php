<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choose Restaurant</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <?php include"nav/nav.php"?>
    <div style="width: auto; height: 80px;"></div>

    <div class="container">
        <div class="row">
            <div class="col col-3"><h2 class="text">Restaurants and Stores</h2></div>
            <div class="col col-6 col-sm-2"></div>
            <div class="col col-3"><button class="btn btn-primary">set location</button></div>
        </div>
        <div class="row mx-1 my-3" >
            <form action="">
                <select name="filter" id="filter">
                    <option value="distance" name="distance">Distance</option>
                    <option value="rating" name="rating">Rating</option>
                </select>
                
            </form>
        </div>
        <div class="border-top" >
                    hello owel
                </div>
    </div>





    <?php include"footer.php"?>
    
</body>
</html>