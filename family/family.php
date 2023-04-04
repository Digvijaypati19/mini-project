<?php
include "lockc.php";
?>
<html><center><marquee>
    <font color="gold">
    <h1>Welcome to home page </h1>
</font></marquee>


<head>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        
        <script type="text/javascript">
          
            $(document).ready(function() {
                $("#family").validate({
                  rules: {
                    d_name: "required",
                    d_cont: {
                      required:true,
                      minlength:10,
                      number:true
                    },
                    d_email:{
                      required:true,
                      email:true
                    },
                    d_birth:"required",
                    d_add:"required",
                    d_blood:"required"
                  },
                  message:{
                    d_name:"Please enter full Name",
                    d_cont:{
                      required:"please enter countact",
                      minlength:"contact should be 10 digit",
                      number:"place enter valide no"
                    },
                    d_email:{
                      required:"please enter email",
                      email:"please enter valid email"
                    },
                    d_birth:"Please select date of birth",
                    d_add:"Please enter your address",
                    d_blood:"please enter your blood group"

                  },
                  submitHandler:function(form){
                    alert("Data is correct.!!");
                    form.submit();
                  }
                
                });
            });
</script>
          </head>
<body background="c5.jpg">
   
<form  id ="family" action ="connecthc.php" method="POST">
  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="gold">
   <h1> Patil family </h1>
  <h1  > User Form</h1></font>
  
  Enter a Name<input type="text" name="d_name" id="d_name" value=""
  placeholder="Enter Name"></br></br>
  Enter contact no<input type="text" name="d_cont" id="d_cont" maxlength="10" value=""
  placeholder="contact"></br></br>
  Enter Email<input type="text" name="d_email" id="d_email" value=""
  placeholder="Email"></br></br>
  Birthday<input type="date" name="d_birth" id="d_birth" value=""
  placeholder="Birthday"></br></br>
  Address<input type="text" name="d_add" id="d_add" value=""
  placeholder="Address"></br></br>
  Blood Group<input type="text" name="d_blood" id="d_blood" value=""
  placeholder="Blood Group"></br></br>

  
  

  <input type="reset" name="reset" value="reset"></br>
  <button type="submit">Submit</button>
  <button><a href="Ucform.php">Update</a></button>
  <button><a href="searchc1.php">search</a></button>
  <button><a href="cform.php">logout</a></button><br>
  <br>*****************************************************
</form></center>
</body>
</html>
  




