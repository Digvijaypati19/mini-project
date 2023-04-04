<html>
    <head>
</head>
<body><center>
    <form action=" " method="POST">
        <input type="text" id="v_name" name="v_name"
        value="" placeholder="Enter name ">
       
        <input type="password" id="v_pass" name="v_pass"
        value="" placeholder="Enter password">
       
        <input type ="submit" value="log In">
</form>
for new user register here.
<button> <a class="" href="form2.php">
    register
</a></button>
<button><a class="" href="forgot.php">
    forgot password
</a></button></center>
</body>
</html>



<?php
session_start();

include("config4.php");
if(isset($_SEESION['login_user']))
{
    header("location:home4.php");
}
  if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $myusername=$_POST['v_name'];
 $mybirth=$_POST['v_birth'];
 $mypassword=$_POST['v_pass'];
 $password=md5($mypassword);
   $sql="SELECT v_id FROM user3 WHERE v_name='$myusername' OR v_email='$myusername' OR v_cont='$myusername' AND v_pass='$password' OR v_birth='$mybirth'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);

 $count=mysqli_num_rows($result);

   if($count==1)
   {

    $_SESSION['login_user']=$myusername;

    header("location:home4.php");
   }
  else
  {
    echo"Your login name or password is invalide";

  }
}
?>