<?php
session_start();

include("configc.php");
if(isset($_SEESION['check']))
{
    header("location:students.php");
}
  if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $myusername=$_POST['c_name'];
 $mypassword=$_POST['c_pass'];
 $password=md5($mypassword);
   $sql="SELECT c_id FROM cform WHERE c_name='$myusername' AND c_pass='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);

 $count=mysqli_num_rows($result);

   if($count==1)
   {

    $_SESSION['check']=$myusername;

    header("location:checkc1.php");
   }
  else
  {
    echo"Your login name or password is invalide";

  }
}
?>