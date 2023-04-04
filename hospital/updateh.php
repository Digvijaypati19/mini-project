<?php
include("configh.php");
if($_SERVER['REQUEST_METHOD']  == 'POST')
{
    $a= $_POST['q_name'];
    $b= $_POST['q_cont'];
    $c= $_POST['q_add'];
    $d= $_POST['q_disses'];
    $e= $_POST['q_date_in'];
    $f= $_POST['q_date_out'];
    $g= $_POST['q_bill'];
    $h= $_POST['q_id'];
    
    $qry=mysqli_query($con,"UPDATE p_patient SET q_name='$a' WHERE q_id='$h' ");
    $qry=mysqli_query($con,"UPDATE p_patient SET q_cont='$b' WHERE q_id='$h' ");
    $qry=mysqli_query($con,"UPDATE p_patient SET q_add='$c' WHERE q_id='$h' ");
    $qry=mysqli_query($con,"UPDATE p_patient SET q_disses='$d' WHERE q_id='$h' ");
    $qry=mysqli_query($con,"UPDATE p_patient SET q_date_in='$e' WHERE q_id='$h' ");
    $qry=mysqli_query($con,"UPDATE p_patient SET q_date_out='$f' WHERE q_id='$h' ");
    $qry=mysqli_query($con,"UPDATE p_patient SET q_bill='$g' WHERE q_id='$h' ");
  
    if($qry == true)
    {
        echo "updated";
        
        header("location:patient.php");
        
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