<?php
include('configi.php');
$path="photo/";
$valid_formats =array("jpg","png","JPG","bmp");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $time=time();
    $actual_image_name=$_FILES['i_img1']['name'];
    $reimg=$time.$actual_image_name;
    $size=$_FILES['i_img1']['size'];
    $tmp=$_FILES['i_img1']['tmp_name'];
    $ext= explode(".",$actual_image_name);
    print_r ($ext);


    if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$reimg))
        {
            $qryt=mysqli_query($con,"INSERT INTO uplod.photo(i_img1,i_flag)VALUES ('$reimg','1')");
            echo"<img style='width:30%;'src='$path/$reimg'>";
        }
        else{
            echo"not";
        }
    }
    else{
        echo"invalidformat";
    }
} 
  if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $time=time();
    $actual_image_name=$_FILES['i_img2']['name'];
    $img=$time.$actual_image_name;
    $size=$_FILES['i_img2']['size'];
    $tmp=$_FILES['i_img2']['tmp_name'];
    $ext=explode(".",$actual_image_name);
    print_r($ext);


    if(in_array($ext[1],$valid_formats)){
        if(move_uploaded_file($tmp,$path.$img))
        {
            $qryt1=mysqli_query($con,"INSERT INTO uplod.photo(i_img2,i_flag)VALUES ('$img','1')");
            echo"<img style='width:30%;'src='$path/$img'>";
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