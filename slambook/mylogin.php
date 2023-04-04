<?php
require_once('dbconfig.php');

session_start();



  if(isset($_POST['btn-signup']))
{
 $myusername=$_POST['y_email'];
 $mypassword=$_POST['y_pass'];
 $hashed_password=password_hash($mypassword,PASSWORD_DEFAULT);
   $query=$DBcon->query("SELECT y_email FROM mylogin WHERE y_email='$myusername' AND y_pass='$hashed_password'");
 

 $count=$query->num_rows;

   if($count==0)
   {
      header("location:checkc1.php");
   }
  else
  {
    echo"Your login name or password is invalide";

  }


    $DBcon->close();

}
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">   
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="x-UA-Compatible" content="ie=edge" />
      <title>Login form</title>
      <script src="https://kit.fontawesome.com/ff412108f8.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styles.css">
      </head>
<body>
      <div class="form-container">

    <form  method="POST">
        <h3>📖 MYSlam 📚 </h3> 
        <label>Email </label>
      <input type="text" name="y_email"  placeholder="Email" >
      <label>Password</label>
        <input type="password" name="y_pass"  placeholder="password" >
         
        
        <div class="btn-signup">
         
      <input type="submit" name="btn-signup"> 
        </div>
</div>
 
</form>
</div>
</body> 
</html>