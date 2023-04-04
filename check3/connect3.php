<?php
session_start();

include("config3.php");
if(isset($_SESSION['login_user']))
{
    header("location:home3.php");
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $myusername=$_POST['u_name'];
    $myemail=$_POST['u_email'];
    $mycountact=$_POST['u_cont'];
    $mypassword=$_POST['u_pass'];
    $password=md5($mypassword);
    $sql="SELECT u_id FROM user2 WHERE u_name='$myusername' AND u_email='$myemail' AND u_cont='$mycountact' AND u_pass='$password'";
    $result=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($result);

    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login_user']=$myusername;
        header("location:home3.php");
    }
    else{
        echo"Your login name or password is invalid";
    }
}
?>