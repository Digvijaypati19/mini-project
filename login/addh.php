<?php
require_once('dbconnect.php');
if(isset($_POST['btn-signup'])){
    $name=$_POST['h_name'];
    $cont=$_POST['h_cont'];
    $add=$_POST['h_add'];
    $disses=$_POST['h_disses'];
    $date_in=$_POST['h_date_in'];
    $date_out=$_POST['h_date_out'];
    $bill=$_POST['h_bill'];
    
    

    $check_cont=$DBcon->query("SELECT h_cont FROM tbl_patient WHERE h_cont='$cont'");
    $count=$check_cont->num_rows;

    if($count==0)
    {
        $query="INSERT INTO tbl_patient(h_name,h_cont,h_add,h_disses,h_date_in,h_date_out,h_bill) VALUES('$name','$cont','$add','$disses','$date_in','$date_out','$bill')";

        if($DBcon->query($query)){
            echo"successfull registering !";
        }
        else{
            $msg="error while registering !";
            
        }
    }else{
        $msg="sorry email already taken !";
    }
    $DBcon->close();
}?>

<html><center><marquee>
    <font color="gold">
    <h1>Welcome to home page </h1>
</font></marquee>

<head>
</head>
<body background="dph.jpg">
   
<form  method="POST" id="register-form">
  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="gold">
   <h1> Patil Hospital </h1>
  <h1  > Patient Form</h1></font>
  
  Enter a Name<input type="text" name="h_name" id="h_name" value=""
  placeholder="Enter Name" required /></br></br>
  Enter contact no<input type="text" name="h_cont" id="h_cont" value=""
  placeholder="contact"required /></br></br>
  Enter address<input type="text" name="h_add" id="h_add" value=""
  placeholder="address"required /></br></br>
  Enter Disses<input type="text" name="h_disses" id="h_disses" value=""
  placeholder="disses"required /></br></br>
  Enter Date in<input type="date" name="h_date_in" id="h_date_in" value=""
  placeholder="Date in"required /></br></br>
  Enter Date out<input type="date" name="h_date_out" id="h_date_out" value=""
  placeholder="date out"required /></br></br>
  Enter Bill<input type="text" name="h_bill" id="h_bill" value=""
  placeholder="amount"required /></br></br>

  <input type="reset" name="reset" value="reset"></br>
  <button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
  <button><a href="homeh.php">Home</a></button>
  <button><a href="searchh.php">search</a></button>
  <button><a href="loginh.php">logout</a></button><br>
  <br>*****************************************************
</form></center>
</body>
</html>
  
