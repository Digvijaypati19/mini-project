<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:login4.php");
}
include('config4.php');
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"SELECT * FROM user3 WHERE v_name ='$user_check' OR  v_email ='$user_check'");

$row=mysqli_fetch_array($ses_sql);
echo" WELCOME  " .$login_session=$row['v_name'];
?>