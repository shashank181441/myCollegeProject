  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Hello, world!</title>
    </head>
    <body>
    <?php require 'nav/nav.php'  ?>
    

      <div class="line"  style="width: 100vw;" >
        <div class='searchh center' style="top: 240px; left: 50%; transform: translate(-50%,0%); position: absolute">
        <p class="aboveSearch">Order food from the wildest range of restaurants.</p>
        <div class="searchBox">
            <input type="text" class="searchFood">
            <Label style="background-color: black; color:yellow; padding: 5px;margin-left: 4px;">Find Food</Label>
        </div>
    </div>
    </div>
      

    <div class="container my-3">
      <div class="row pt-2 pb-1">
              <div class="col-auto">
                  <p>Featured Restaurant</p>
              </div>
              <div class="col"></div>
              <div class="col-auto">
               <a class="link link-dark" type="submit" style="text-decoration: none;" href='chooseRestaurantByDistance.php'>find more -></a>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <div class="card">
                      <img src="images/foodpick.jpg" class="card-img-top" alt="Europe">
                      <div class="card-body">
                          <h5 class="card-title">A Street in Europe</h5>
                          
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-3">
                  <div class="card">
                      <img src="images/foodpick.jpg" class="card-img-top" alt="London">
                      <div class="card-body">
                          <h5 class="card-title">London</h5>
                          
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-3">
                  <div class="card">
                      <img src="images/foodpick.jpg" class="card-img-top" alt="New York">
                      <div class="card-body">
                          <h5 class="card-title">New York</h5>
                          
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-3">
                  <div class="card">
                      <img src="images/foodpick.jpg" class="card-img-top" alt="New York">
                      <div class="card-body">
                          <h5 class="card-title">New York</h5>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      

      <!-- About Us -->
      <div class="container-fluid  text-center">

        
        
       <div class="row aboutUs text-center align-items-center" >
          <div class="col col-2"></div>
          <div class="col col-md-8">

          <h3 class="text-black text-center  font-size-20">About Us</h3>
          <p class="text-white text-center  font-size-16">
              TatoTato is the fastest, easiest and most convenient way to enjoy the best food of your favourite restaurants at home, at the office or wherever you want to.
          </p>
          <p class="text-white text-center  font-size-16">
              We know that your time is valuable and sometimes every minute in the day counts.
              That's why we deliver! So you can spend more time doing the things you love.
          </p></div>
          <div class="col col-2"></div>
       </div>
      </div>
    
    
    </div><!-- About Us -->

    <!-- Write message to add your company -->

    <div class="text-center my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-whatever="@getstrap">Add your restaurant</button></div>

    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="mb-3">
              <label for="sender-name" class="col-form-label">Your Name:</label>
              <input type="text" class="form-control" id="sender-name" name="sender_name" required>
            </div>
            <div class="mb-3">
              <label for="restaurant-text" class="col-form-label">Restaurant's Name:</label>
              <input type="text" class="form-control" id="restaurant-text" name="restaurant_name" required></input>
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="sender_email" required>
            </div>
            <div class="mb-3">
              <label for="contact-number" class="col-form-label">Contact Number:</label>
              <input type="Number" class="form-control" id="contact-number" name="sender_phone" required></input>
            </div>
            <div class="mb-3">
              <label for="details" class="col-form-label">Details:</label>
              <textarea class="form-control" id="details" name="restaurant_details" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send message</button>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text-center" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>


    





    <!-- footer -->

    <?php require 'footer.php'  ?> 


        








      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    </body>
  </html>

  <!-- <?php 
    $sender_name=$restaurant_name=$sender_email=$sender_phone=$restaurant_details="";

    if($_POST['sender_name']!="") {
    $sender_name=$_POST["sender_name"];
    $restaurant_name=$_POST["restaurant_name"];
    $sender_email=$_POST["sender_email"];
    $sender_phone=$_POST["sender_phone"];
    $restaurant_details=$_POST["restaurant_details"];

    
    

    
    $conn=mysqli_connect("localhost","root","","food_ordering_system");

    if($conn->connect_error){
      die('failed to connect'.$conn->connect_error);
    }
      $query="insert into Restaurant_message(name, rest_name, email,contact_number,details) values ('$sender_name','$restaurant_name','$sender_email' ,'$sender_phone','$restaurant_details')";
      if(mysqli_query($conn,$query)){
        // echo "<script>alert('Application sent')</script>";
        
        echo "<a href='experiment.html'>Go Home</a>";
      }
      else{
        echo mysqli_error($conn);
      }

      if(isset($sender_name)){
        echo '<script>alert("form filled")</script>';

      }else{
        echo "no comment";
      }
      }
      ?> 
      
 -->

