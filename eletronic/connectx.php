
<?php
include("confige.php");
session_start();

if($_SERVER['REQUEST_METHOD'] =="POST")
{
   $myusername=$_POST['username'];
  $mypassword=$_POST['password'];
  $password=md5($mypassword);
  $type=$_POST['type'];
  if($type==1)
   {
       $sql="SELECT * FROM staff_1 WHERE  s_name='$myusername' AND s_pass='$password'";
       $result=mysqli_query($con,$sql);
       $row=mysqli_fetch_array($result);
       $id=$row['s_id'];
       $status=$row['s_flag'];
       
        $count=mysqli_num_rows($result);
       if($count==1 && $status==1)
       {
      $_SESSION['login_user']=$myusername;
      header("location:homes.php");
       }
      else
      {
       echo"your login or password is invalid";
       } 
    }
    elseif($type==2)
    {
        $sql1="SELECT * FROM workerlogin WHERE  w_email='$myusername' AND w_pass='$password'";
       $result=mysqli_query($con,$sql1);
       $row=mysqli_fetch_array($result);
       $id=$row['w_id'];
       $status=$row['w_flag'];
       
        $count=mysqli_num_rows($result);
       if($count==1 && $status==1)
       {
      $_SESSION['login_user']=$myusername;
      header("location:searchs.php");
       }
      else
      {
       echo"your login or password is invalid";
       }
    }
}



?>