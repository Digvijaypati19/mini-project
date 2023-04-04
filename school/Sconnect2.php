
<?php
include("configE.php");

$path="file/";
$valid_formats =array("jpg","png","JPG","bmp",".jpeg");
if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $time=time();
    $actual_image_name=$_FILES['l_img1']['name'];
    $reimg=$time.$actual_image_name;
    $size=$_FILES['l_img1']['size'];
    $tmp=$_FILES['l_img1']['tmp_name'];
    $ext= explode(".",$actual_image_name);
    print_r ($ext);

    $myusername=$_POST['username'];
    $mypassword=$_POST['password'];
    $password=md5($mypassword);
    if(in_array($ext[1],$valid_formats)){

        if(move_uploaded_file($tmp,$path.$reimg))
        {

         $qry=mysqli_query($con,"INSERT INTO patil_highscool.studentlogin(l_email,l_pass,l_img1,l_flag) VALUES ('$myusername','$password','$reimg','1')");
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



?>