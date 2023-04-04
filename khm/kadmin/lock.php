<?php
include('../dbinfo.php');
session_start();
error_reporting(0);
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select username from kadmin where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: ../login.php");
}
?>