<?php
session_start();

require_once("dbconnectw.php");
if(isset($_SESSION['check']))
{
    header("location:homew1.php");
}
if(isset($_POST['btn-signup']))
{
    $myusername=$_POST['u_name'];
    $mypassword=$_POST['u_pass'];


   $query=$DBcon->query("SELECT u_id,u_name,u_pass FROM u_user WHERE u_name='$myusername'");
    $row=$query->fetch_array();
    $count =$query->num_rows;
    if(password_verify($mypassword, $row['u_pass']) && $count==1){
        $_SESSION['check'] =$row['l_id'];
        header("Location:homew1.php");
    }else{
        echo"Invailde Username or passowrd";
    }
$DBcon->close();

}


?>


 
