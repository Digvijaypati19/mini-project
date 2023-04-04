<?php
session_start();

include("configg.php");
if(isset($_SEESION['check']))
{
    header("location:userg.php");
}
  if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $myusername=$_POST['g_name'];
 $mycont=$_POST['g_cont'];
 
   $sql="SELECT g_id FROM g_user WHERE g_name='$myusername' AND g_cont='$mycont'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);

 $count=mysqli_num_rows($result);

   if($count==1)
   {

    $_SESSION['check']=$myusername;
    header("location:confirmg.php");
    
   }
  else
  {
    echo"Your login name or password is invalide";

  }
}?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['g_name'];
    $b=$_POST['g_cont'];
    $c=$_POST['g_email'];
    $d=$_POST['g_date'];
    $e=$_POST['g_add'];
    

  echo $qry=mysqli_query($con,"INSERT INTO g_user(g_name,g_cont,g_email,g_date,g_add)  VALUE ('$a','$b','$c','$d','$e')");

  if($qry ==true)
  {
      echo"<center>"." inserted"."</center>";
  }
  else{
      echo"not".mysqli_error($con);
  }
}
else{
    echo"request method is not POST";
}
?>