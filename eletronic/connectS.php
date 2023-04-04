<?php
include ('confige.php');
$path = "photos/";
$valid_formats=array("jpg","bmp","JPG","pdf");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    $time=time();
    $actual_image_name=$_FILES['z_photo']['name'];
    $g=$time.$actual_image_name;
    $size=$_FILES['z_photo']['size'];
    $tmp=$_FILES['z_photo']['tmp_name'];
    $ext=explode(".",$actual_image_name);
    

    $a=$_POST['z_name'];
    $b=$_POST['z_cont'];
    $c=$_POST['z_date']; 
    $d=$_POST['z_add'];
    $e=$_POST['z_phone'];
    $f=$_POST['z_work'];
     $h=$_POST['z_bill'];
    

  
  if(in_array($ext[1],$valid_formats))
  {
      if(move_uploaded_file($tmp,$path.$g))
      {
         $qry=mysqli_query($con,"INSERT INTO work(z_name,z_cont,z_date,z_add,z_phone,z_work,z_photo,z_bill)  VALUE ('$a','$b','$c','$d','$e','$f','$g','$h')");

          

      }
      
      else{
          echo"not";
      }
  }
      
    }


?>