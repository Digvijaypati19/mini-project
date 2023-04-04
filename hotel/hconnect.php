<?php
include('hconfig.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['h_name'];
    $b=$_POST['h_email'];
    $c=$_POST['h_country']; 
    $d=$_POST['h_bedding'];
    $e=$_POST['h_check_in'];
    $f=$_POST['h_check_out'];
    $g=$_POST['h_status'];

  echo $qry=mysqli_query($con,"INSERT INTO booking(h_name,h_email,h_country,h_bedding,h_check_in,h_check_out,h_status)  VALUE ('$a','$b','$c','$d','$e','$f','$g')");

  if($qry ==true)
  {
      echo"<center>"." inserted"."</center>";
  }
  else{
      echo"not".mysqli_error($con);
  }
}
else{
    echo"request method is not POST";
}

?>