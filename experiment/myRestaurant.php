<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Restaurant</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>
    <?php require 'nav.php ' ?>
    <div class="container-fluid">
        <div class="row">


            <img class="col-12" src="backgroundForAboutUs.jpg" alt="error" width="100%" height="50%">

            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-6 text-left">
                    <h1 class="text-left">Yummy Food</h1>
                    <p class="text">Biryani, Chinese, Fast Food, North Indian <br>
                        Motihari Locality, Motihari</p>
                    <div>
                        <button class="btn btn-primary">Reviews</button>
                        <button class="btn btn-primary">place Order</button>
                        <button class="btn btn-primary">Location</button>
                    </div>
                </div>
                <h3 class="text mt-3">categories</h3>
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
                <div class="row">
                    <div class="col col-1"></div>

                    <table class="table col col-6">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Momos</th>
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
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


            
            </div>
            </div>
            <div class="col col-1"></div>
        </div>
    </div>



    <?php require 'footer.php' ?>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>