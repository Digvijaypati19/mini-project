<?php
include("configg.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['g_name'];
    $b=$_POST['g_cont'];
    $c=$_POST['g_email'];
    
    $e=$_POST['g_add'];
    

  echo $qry=mysqli_query($con,"INSERT INTO g_user(g_name,g_cont,g_email,g_add)  VALUE ('$a','$b','$c','$e')");

  if($qry ==true)
  {?>
    <h1> Wellcome To DP Gas <h1>
    <button><a href="gform.php">Home Page</a></button>
        <?php
  }
  else{
      echo"not".mysqli_error($con);
  }
}
else{
    echo"request method is not POST";
}
?>