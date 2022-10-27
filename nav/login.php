<?php
            if(isset($_POST["bt1"]))
{



      include "dbconn.php";
      $email=$_POST["email1"];
      $password=$_POST["pass"];
      
      

          
      $email_search="select * from registration where Email='$email'";

      $query1=mysqli_query($conn, $email_search);

      $email_count=mysqli_num_rows($query1);
      
    if($email_count)//valid email
    {
        
          $email_pass=mysqli_fetch_assoc($query1);
          $db_pass=$email_pass["Password"];
          $_SESSION['email']=$email_pass['Email'];
          $_SESSION['first_name']=$email_pass['FirstName'];
          $_SESSION['last_name']=$email_pass['LastName'];
          $_SESSION['phone']=$email_pass['ContactNumber'];

          

          $pass_decode=password_verify($password, $db_pass);
          echo "<script>alert('hello');</script>";
          echo "<script>alert($db_pass);</script>";
       if($pass_decode)
       {
          echo "<script>alert('login successful');</script>";
          
            
        
             }
       else
       {
        
        echo "<script>alert('password incorrect  you know what isay');</script>";
              
           
       }
    }
    else //invalid email
    {

      echo "<script>alert('email incorrect');</script>";

    }
      
}


  



?>
























<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white py-0">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto ">
              <li class="nav-item " >
                <a class="nav-link active" href="tatotato.html"><img src="images/tatotato.jpg" width="100px" alt=""></a>
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
          <form action="../experiment.php" method="POST">
            <div class="row">
            
            
            <div class=" mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email1" required>
            </div>
            
            <div class="cmb-3 mb-3">
              <label for="first-name" class="col-form-label">Enter password:</label>
              <input type="password" class="form-control" id="password" name="pass" required>
            </div>
            
            
            <button type="submit" class="btn btn-primary mb-3" name="bt1">Log In</button>
            <p>If you don't have any account, <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Sign up</a></p>
            </div></form></div></div></div></div>


           