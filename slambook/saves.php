<?php
require_once('configslam.php');

if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $a=$_POST['b_name'];
    $b=$_POST['b_contact'];
    $c= $_POST['b_email'];
    $d= $_POST['b_add'];
     $e= $_POST['b_dob'];
    $f= $_POST['b_nikname'];
    $g=$_POST['b_color'];
    $h=$_POST['b_food'];
    $i=$_POST['b_actor'];
    $j=$_POST['b_flower'];
    $k=$_POST['b_car'];
    $l=$_POST['b_movie'];
    $m=$_POST['b_place'];
    $n=$_POST['b_sportman'];

    
    

  echo  $qry=mysqli_query($con, "INSERT INTO slambook.friendes( b_name, b_contact,b_email,b_add,b_dob,b_nikname,b_color,b_food,b_actor,b_flower,b_car,b_movie,b_place,b_sportman) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')");

    if($qry ==true)
    {
        echo"<center>"."  inserted"."</center>";
    
        header("location:thankus.php");
            
        

    }
    else{
        echo"not".mysqli_error($con);
    }

}
else{
    echo"Request method is not POST";
}


?>