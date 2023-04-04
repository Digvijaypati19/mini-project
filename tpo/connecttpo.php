<?php
include("configtpo.php");
session_start();

if($_SERVER['REQUEST_METHOD'] =="POST")
{
   $myusername=$_POST['username'];
  $mypassword=$_POST['password'];
  $password=md5($mypassword);
  $type=$_POST['type'];
  if($type==1)
   {
       $sql="SELECT * FROM stafftpo WHERE  s_name='$myusername' AND s_pass='$password'";
       $result=mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $id=$row['s_id'];
       $status=$row['s_flag'];
       
        $count=mysqli_num_rows($result);
       if($count==1 && $status==1)
       {
      $_SESSION['login_user']=$myusername;
      header("location:searchtpo.php");
       }
      else
      {
       echo"your login or password is invalid";
       } 
    }
    elseif($type==2)
    {
        $sql1="SELECT * FROM t_studentlogin WHERE  t_email='$myusername' AND t_pass='$password'";
       $result=mysqli_query($con,$sql1);
       $row=mysqli_fetch_array($result);
       $id=$row['t_id'];
       $status=$row['t_flag'];
       
        $count=mysqli_num_rows($result);
       if($count==1 && $status==1)
       {
      $_SESSION['login_user']=$myusername;
      header("location:add.php");
       }
      else
      {
       echo"your login or password is invalid";
       }
    }
}



?>