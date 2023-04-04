<?php
session_start();
if(!isset($_SESSION['check']))
{
    header("location:login1.php");
}
include('configc.php');
$user_check=$_SESSION['check'];
$ses_sql=mysqli_query($con,"SELECT * FROM user WHERE l_username='$user_check'");
$row=mysqli_fetch_array( $ses_sql);

echo"  WELCOME  "  .$login_session=$row['l_username'];
?>