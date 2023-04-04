<?php
include('configh.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['q_name'];
    $b=$_POST['q_cont'];
    $c= $_POST['q_add'];
    $d= $_POST['q_disses'];
    $e= $_POST['q_date_in'];
    $f= $_POST['q_date_out'];
    $g= $_POST['q_bill'];
    

  echo  $qry=mysqli_query($con, "INSERT INTO p_patient (q_name, q_cont,q_add,q_disses,q_date_in,q_date_out,q_bill) VALUES ('$a','$b','$c','$d','$e','$f','$g')");

    if($qry ==true)
    {
        echo"<center>"."  inserted"."</center>";
    
        header("location:patient.php");
            
        

    }
    else{
        echo"not".mysqli_error($con);
    }

}
else{
    echo"Request method is not POST";
}


?>