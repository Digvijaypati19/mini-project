<html>
    <head></head>
    <body background="dph.jpg">
        <center>
 <form  action="updateh.php" method="POST">
     <img src ="dlogo.jpg" width="15%"height="30%">
     <h1>Update Registration Form</h1>
     <h2> Enter  Patient Details Below</h2>
     Enter name<input type="text" name="q_name" id="q_name"value=""
     placeholder="update user name "></br></br>
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
    
    Enter id <input type="text" name="q_id" id="q_id"value=""
     placeholder="select user id"></br>

     <button type="submit">Submit</button>
     <button><a href="patient.php">Add Details</a></button>
     <button><a href="hform.php">logout</a></button><br>
     <button><a href="searchc.php">search</a></button>
</form></center>
</body>
</html>