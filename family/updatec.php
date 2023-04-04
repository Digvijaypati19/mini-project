<?php
include("configc.php");
if($_SERVER['REQUEST_METHOD']  == 'POST')
{
    $a= $_POST['d_name'];
    $b= $_POST['d_cont'];
    $c= $_POST['d_email'];
    $d= $_POST['d_birth'];
    $e= $_POST['d_add'];
    $f= $_POST['d_blood'];
    
    $h= $_POST['d_id'];
    
    $qry=mysqli_query($con,"UPDATE d_family SET d_name='$a' WHERE d_id='$h' ");
    $qry=mysqli_query($con,"UPDATE d_family SET d_cont='$b' WHERE d_id='$h' ");
    $qry=mysqli_query($con,"UPDATE d_family SET d_email='$c' WHERE d_id='$h' ");
    $qry=mysqli_query($con,"UPDATE d_family SET q_birth='$d' WHERE d_id='$h' ");
    $qry=mysqli_query($con,"UPDATE d_family SET d_add='$e' WHERE d_id='$h' ");
    $qry=mysqli_query($con,"UPDATE d_family SET d_blood='$f' WHERE d_id='$h' ");
    
  
    if($qry == true)
    {
        echo "updated";
        
        header("location:family.php");
        
    }
    else
    {
        echo"not".mysqli_error($con);
    }

}
else{
    echo"not post";
}
?>