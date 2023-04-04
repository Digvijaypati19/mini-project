<html>
    <head>
</head>   

    <center>
    
<?php
session_start();
if(!isset($_SESSION['check']))
{
    header("location:checkc.php");
}
include('configh.php');
$user_check=$_SESSION['check'];
$ses_sql=mysqli_query($con,"SELECT * FROM p_staff WHERE p_name ='$user_check' OR  p_pass='$user_check'");

$row=mysqli_fetch_array($ses_sql);

echo" WELCOME  " .$login_session=$row['p_name'];


?>
</html></center>