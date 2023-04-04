<?php
include('configtpo.php');
$path ="tpo/";
$valid_formats =array("jpg","pdf","PDF","bmp","JPG");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $time=time();
    $actual_image_name = $_FILES['e_resume']['name'];
    $img=$time.$actual_image_name;
    $size=$_FILES['e_resume']['size'];
    $tmp =$_FILES['e_resume']['tmp_name'];
    $ext= explode(".",$actual_image_name);
    print_r ($ext);
    $a=$_POST['e_name'];
    $b=$_POST['e_email'];
    $c=$_POST['e_cont']; 
    $d=$_POST['e_collage'];
    $e=$_POST['e_marks10'];
    $f=$_POST['e_marks12'];
    $g=$_POST['e_cgpa'];
    
   

     

     if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$img))
        {
            echo $qry=mysqli_query($con,"INSERT INTO studenttpo(e_name,e_email,e_cont,e_collage,e_marks10,e_marks12,e_cgpa,e_resume)  VALUE ('$a','$b','$c','$d','$e','$f','$g','$img')");
            
            header("location:add.php");
        }
        else{
            echo"not";
        }
    }
        else{
            echo"invalidformat";
        }
}


?>
