<?php
require_once('configc.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['d_name'];
    $b=$_POST['d_cont'];
    $c= $_POST['d_email'];
    $d= $_POST['d_birth'];
    
    $e= $_POST['d_add'];
    $f= $_POST['d_blood'];
    
    

  echo  $qry=mysqli_query($con, "INSERT INTO family (d_name, d_cont,d_email,d_birth,d_add,d_blood) VALUES ('$a','$b','$c','$d','$e','$f')");

    if($qry ==true)
    {
        echo"<center>"."  inserted"."</center>";
    
        header("location:family.php");
            
        

    }
    else{
        echo"not".mysqli_error($con);
    }

}
else{
    echo"Request method is not POST";
}


?>