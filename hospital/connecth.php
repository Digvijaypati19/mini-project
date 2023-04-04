<?php
session_start();

require_once("configh.php");
if(isset($_SEESION['check']))
{
    header("location:patient.php");
}
  if(isset($_POST['btn-signup']))
{
 $myusername=$_POST['p_name'];
 $mypassword=$_POST['p_pass'];
 $hashed_password = password_hash($mypassword,PASSWORD_DEFAULT);
   $sql="SELECT p_id FROM p_staff WHERE p_name='$myusername' AND p_pass='$password'";
 $result=$DBcon->query();
 $

 $count=mysqli_num_rows($result);

   if($count==1)
   {

    $_SESSION['check']=$myusername;

    header("location:checkc.php");
   }
  else
  {
    echo"Your login name or password is invalide";

  }
}
?>