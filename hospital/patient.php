<?php
include "lockh.php";
?>
<html><center><marquee>
    <font color="gold">
    <h1>Welcome to home page </h1>
</font></marquee>

<head>
</head>
<body background="dph.jpg">
   
<form action ="connecth2.php" method="POST">
  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="gold">
   <h1> Patil Hospital </h1>
  <h1  > Patient Form</h1></font>
  
  Enter a Name<input type="text" name="q_name" id="q_name" value=""
  placeholder="Enter Name"></br></br>
  Enter contact no<input type="text" name="q_cont" id="q_cont" value=""
  placeholder="contact"></br></br>
  Enter address<input type="text" name="q_add" id="q_add" value=""
  placeholder="address"></br></br>
  Enter Disses<input type="text" name="q_disses" id="q_disses" value=""
  placeholder="disses"></br></br>
  Enter Date in<input type="date" name="q_date_in" id="q_date_in" value=""
  placeholder="Date in"></br></br>
  Enter Date out<input type="date" name="q_date_out" id="q_date_out" value=""
  placeholder="date out"></br></br>
  Enter Bill<input type="text" name="q_bill" id="q_bill" value=""
  placeholder="amount"></br></br>

  <input type="reset" name="reset" value="reset"></br>
  <button type="submit">Submit</button>
  <button><a href="Uform.php">Update</a></button>
  <button><a href="searchc.php">search</a></button>
  <button><a href="hform.php">logout</a></button><br>
  <br>*****************************************************
</form></center>
</body>
</html>
  
</html></center>



