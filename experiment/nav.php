<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white py-0">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto ">
              <li class="nav-item " >
                <a class="nav-link active" href="tatotato.html"><img src="tatotato.jpg" width="100px" alt=""></a>
              </li>
            </ul>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getstrap">LogIns</button></div></nav>

              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="experiment.php" method="post">
            <div class="row">
            
            
            <div class=" mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            
            <div class="cmb-3 mb-3">
              <label for="first-name" class="col-form-label">Enter password:</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            
            
            <button type="submit" class="btn btn-primary mb-3">Log In</button>
            <p>If you don't have ana account, <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Sign up</a></p>
            </div></form></div></div></div></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
         <div class="modal-body">
          <form action="experiment.php" method="post">
            <div class="row">
            <div class="col col-md-6 mb-3">
              <label for="first-name" class="col-form-label">First Name:</label>
              <input type="text" class="form-control" id="first-name" required>
            </div>
            <div class="col col-md-6 mb-3">
              <label for="second-name" class="col-form-label">Last Name:</label>
              <input type="text" class="form-control" id="second-name" required>
            </div>
            
            <div class="col col-md-6 mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="col col-md-6 mb-3">
              <label for="contact-number" class="col-form-label">Contact Number:</label>
              <input type="Number" class="form-control" id="contact-number" required></input>
            </div>
            <div class="col col-md-6 mb-3">
              <label for="first-name" class="col-form-label">Enter password:</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <div class="col col-md-6 mb-3">
              <label for="first-name" class="col-form-label">Confirm password:</label>
              <input type="password" class="form-control" id="confirm_password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Sign Up</button>

            </div>
          </form>
          <p>If you already ahve an account, <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">log in</button> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text-center" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div></div>
            
      