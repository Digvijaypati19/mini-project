
  <html>
<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:checks2.php");
}
include('configE.php');
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"SELECT * FROM studentlogin WHERE l_email ='$user_check' OR  l_pass='$user_check'");

$row=mysqli_fetch_array($ses_sql);

$img=$row['l_img1'];
echo"<img style='width:10%; margin-left:30px;' src='file/$img'>"."</br>" ;

echo" WELCOME" .$login_session=$row['l_email'];



?>
</html>