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
 
 $mypassword=$_POST['v_pass'];
 $mybirth=$_POST['v_birth'];
 $password=md5($mypassword);
   $sql="SELECT v_id FROM user3 WHERE v_name='$myusername' OR v_email='$myusername' OR v_cont='$myusername' AND v_pass='$password' OR v_birth='$mybirth ";
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