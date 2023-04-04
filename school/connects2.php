<?php
include('configE.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['a_name'];
    $b=$_POST['a_stan'];
    $c= $_POST['a_div'];
    $d= $_POST['a_cont'];
    $f=$_POST['a_attendes'];
    
    

  echo  $qry=mysqli_query($con, "INSERT INTO attendes (a_name, a_stan,a_div,a_cont,a_attendes) VALUES ('$a','$b','$c','$d','$f')");

    if($qry ==true)
    {
        echo"<center>"."  inserted"."</center>";
    
        header("location:studentss.php");
            
        

    }
    else{
        echo"not".mysqli_error($con);
    }

}
else{
    echo"Request method is not POST";
}


?>