
<?php
include("configE.php");
session_start();

if($_SERVER['REQUEST_METHOD'] =="POST")
{
   $myusername=$_POST['username'];
  $mypassword=$_POST['password'];
  $password=md5($mypassword);
  $type=$_POST['type'];
  if($type==1)
   {
       $sql="SELECT * FROM staff WHERE  s_name='$myusername' AND s_pass='$password'";
       $result=mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
     echo  $id=$row['s_id'];
       echo $status=$row['s_flag'];
       
        $count=mysqli_num_rows($result);
       if($count==1 && $status==1)
       {
      $_SESSION['login_user']=$myusername;
      header("location:checks.php");
       }
      else
      {
       echo"your login or password is invalid";
       } 
    }
    elseif($type==2)
    {
        $sql1="SELECT * FROM studentlogin WHERE  l_email='$myusername' AND l_pass='$password'";
       $result=mysqli_query($con,$sql1);
       $row=mysqli_fetch_array($result);
       $id=$row['l_id'];
       $status=$row['l_flag'];
       
        $count=mysqli_num_rows($result);
       if($count==1 && $status==1)
       {
      $_SESSION['login_user']=$myusername;
      header("location:checks2.php");
       }
      else
      {
       echo"your login or password is invalid";
       }
    }
}



?>