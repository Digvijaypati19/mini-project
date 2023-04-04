<html>
    <head>
</head>   

    <center>
    
<?php
session_start();
if(!isset($_SESSION['check']))
{
    header("location:family.php");
}
include('configc.php');
$user_check=$_SESSION['check'];
$ses_sql=mysqli_query($con,"SELECT * FROM cform WHERE c_name ='$user_check' OR  c_pass='$user_check'");

$row=mysqli_fetch_array($ses_sql);

echo" WELCOME  " .$login_session=$row['c_name'];


?>
</html></center>