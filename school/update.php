<?php
include("configE.php");
if($_SERVER['REQUEST_METHOD']  == 'POST')
{
    $a= $_POST['a_name'];
    $b= $_POST['a_stan'];
    $c= $_POST['a_div'];
    $d=$_POST['a_cont'];
    $e= $_POST['a_id'];
    
    $qry=mysqli_query($con,"UPDATE attendes SET a_name='$a' WHERE a_id='$e' ");
    $qry=mysqli_query($con,"UPDATE attendes SET a_stan='$b' WHERE a_id='$e' ");
    $qry=mysqli_query($con,"UPDATE attendes SET a_div='$c' WHERE a_id='$e' ");
    $qry=mysqli_query($con,"UPDATE attendes SET a_cont='$d' WHERE a_id='$e' ");
    if($qry == true)
    {
        echo "updated";
        header("location:studentss.php");
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