<?php
session_start();

include("configc.php");
if(isset($_SESSION['login_user']))
{
    header("location:home2.php");

}
 if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $myusername=$_POST['c_username'];
    $mypassword=$_POST['c_password'];
    $password=md5($mypassword);
    $sql="SELECT c_id FROM user2 WHERE c_username='$myusername' AND c_password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    $count=mysqli_num_rows($result);

    if($count==1)
    {
        $_SESSION['login_user']=$myusername;
        header("location:home2.php");

    }
    else
    {
        echo"Your login name or password is invalid";
    }
}
?>