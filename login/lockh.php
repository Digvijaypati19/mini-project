<?php
session_start();
include_once'dbconnect.php';
if(!isset($_SESSION['check'])){
    header("Location:loginh.php");
}
$uid=$_SESSION['check'];
$query=$DBcon->query("SELECT * FROM tbl_user WHERE l_id=$uid");
$userrow=$query->fetch_array();
$DBcon->close();
echo $userrow['l_username'];
?>