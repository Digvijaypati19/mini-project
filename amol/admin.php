<?php
session_start();
require_once("dbconnecta.php");
if(isset($_SESSION['check']))
{
    header("location:homea.php");
}
if(isset($_POST['btn-signup']))
{
    $myusername=$_POST['a_email'];
    $mypassword=$_POST['a_pass'];
    

   $query=$DBcon->query("SELECT a_id,a_email,a_pass FROM a_admin WHERE a_email='$myusername'");
    $row=$query->fetch_array();
    $count =$query->num_rows;
    if(password_verify($mypassword, $row['a_pass']) && $count==1){
        $_SESSION['check'] =$row['a_id'];
        header("Location:homea.php");
    }else{
        echo"Invailde Username or passowrd";
    }
$DBcon->close();

}



?>

<html>
    <head><center>
    <script>
            function myFunction()
            {
                var x =document.getElementById("myinput");
                if(x.type === "password"){
                    x.type ="text";
                }else{
                    x.type ="password";
                }
            }
            </script>
            <link rel="stylessheet" href="css/style.css"/>
</head>
<body >
    
<form method="POST" id="register-form"><br>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <input type="text" name="a_email" id="a_email" placeholder="Email" required/><br><br>
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <input type="password" name="a_pass" id="myinput" placeholder="Password" required/><br><br>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
            <input type="checkbox" onclick="myFunction()">show Passsword</br>
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
    
   
</body>
</html></center>
