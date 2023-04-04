<?php
include('configE.php');
$path ="file/";
$valid_formats =array("pdf","PDF","doc","bmp","JPG");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $time=time();
    $actual_document_name = $_FILES['S_file']['name'];
    $reimg=$time.$actual_document_name;
    $size=$_FILES['S_file']['size'];
    $tmp =$_FILES['S_file']['tmp_name'];
    $ext= explode(".",$actual_document_name);
    print_r ($ext);
    $a=$_POST['S_name'];
    $b=$_POST['S_email'];
    $c=$_POST['S_subject'];
   

     

     if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$reimg))
        {
            $qryt=mysqli_query($con,"INSERT INTO patil_highscool.submission(S_file,S_name,S_email,S_subject,S_flag)VALUES ('$reimg','$a','$b','$c','1')");
            ?>
                <iframe src="file/<?php echo $reimg ; ?>" height="700" width="600"></iframe><br>
                <button><a href="checks2.php">Home Page</a></button>
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


