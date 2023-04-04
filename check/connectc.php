<?php
session_start();

include("configc.php");
if(isset($_SEESION['check']))
{
    header("location:home.php");
}
  if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $myusername=$_POST['l_username'];
 $mypassword=$_POST['l_password'];
 $password=md5($mypassword);
   $sql="SELECT l_id FROM user WHERE l_username='$myusername' AND l_password='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);

 $count=mysqli_num_rows($result);

   if($count==1)
   {

    $_SESSION['check']=$myusername;

    header("location:home.php");
   }
  else
  {
    echo"Your login name or password is invalide";

  }
}
?>