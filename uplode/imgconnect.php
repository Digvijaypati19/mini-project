<?php
include ('configimg.php');
$path ="image/";
$valid_formats =array("jpg","pdf","PDF","bmp","JPG");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $time=time();
    $actual_image_name = $_FILES['upimg']['name'];
    $reimg=$time.$actual_image_name;
    $size=$_FILES['upimg']['size'];
    $tmp =$_FILES['upimg']['tmp_name'];
    $ext= explode(".",$actual_image_name);
    print_r ($ext);
    
  
    if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$reimg))
        {
            $qryt=mysqli_query($con,"INSERT INTO uplode.img(upimg,p_flag)VALUES ('$reimg','1')");
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
   if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $time=time();
    $actual_image_name = $_FILES['uimg']['name'];
    $img=$time.$actual_image_name;
    $size=$_FILES['uimg']['size'];
    $tmp =$_FILES['uimg']['tmp_name'];
    $ext= explode(".",$actual_image_name);
    print_r ($ext);
    
   

     

     if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$img))
        {
            $qryt=mysqli_query($con,"INSERT INTO uplode.img(uimg,p_flag)VALUES ('$img','1')");
            ?>
                <iframe src="image/<?php echo $img ; ?>" height="700" width="800"></iframe>
            <?php

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