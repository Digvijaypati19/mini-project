<?php
require_once('dbconnecta.php');
if(isset($_POST['btn-signup'])){
    $uname=$_POST['w_name'];
    $date=$_POST['w_date'];
    $cont=$_POST['w_type'];
    
    

    $check_cont=$DBcon->query("SELECT  w_name FROM w_mass WHERE w_name='$uname'");
    $count=$check_cont->num_rows;

    if($count==0)
    {
       $query="INSERT INTO w_mass(w_name,w_date,w_type) VALUES('$uname','$date','$cont')";

        if($DBcon->query($query)){
            echo"successfull registering !";
        }
        else{
            $msg="error while registering !";
            
        }
    }else{
        $msg="sorry massage already send !";
    }
    $DBcon->close();
}


?>



<html lang="en">
<head>
</head>
<body background="dpw.jpg">

  
<center>
  
<form  method="POST" id="register-form">
  
  <img src="dlogo.jpg"width="15%"heigth="20%" >
   <h1> D P Motars</h1>
   <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
  
  Enter a massage<input type="text" name="w_name" id="w_name" value=""
  placeholder="massage" ></br></br>
  Date<input type="date" name="w_date" id="w_date" value=""
  placeholder="date" ></br></br>
 
  Please Select Role<select style="margin-bottom:10px;" id="w_type" name="w_type" class="form-control">
  
   <option value="">Please Select Role</option>
  <option value="Digvijay">Digvijay</option>
  <option value="samarth">samarth</option>
  <option value="pratik">pratik</option>

  
</select><br>
  
<button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
<button><a href="homec.php">Home</a></button>
</div>
</div></form></center>
</body>
</html>