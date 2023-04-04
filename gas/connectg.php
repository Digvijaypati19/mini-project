<?php

include("configg.php");
if(isset($_SESSION['check']))
{
    header("location:userg.php");
}
if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $a=$_POST['s_email'];
    $b=md5($_POST['s_pass']);
    $qry="SELECT s_id FROM g_staff WHERE s_email='$a' AND s_pass='$b'";
    $result=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['check']=$a;

        header("location:homeg.php");
    }
      else
      {
        echo"Your login name or password is invalide";
    
      }
}
?>
    
























?>
