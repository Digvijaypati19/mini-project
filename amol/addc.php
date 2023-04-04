<?php
require_once('dbconnecta.php');
if(isset($_POST['signup'])){
 echo   $uname= mysql_real_escape_string ($_POST['c_name']);
    $cont=mysql_real_escape_string($_POST['c_cont']);
    $add=mysql_real_escape_string($_POST['c_add']);
    $date=mysql_real_escape_string($_POST['c_date']);
   $name=mysql_real_escape_string($_POST['c_type1']);
    $model=mysql_real_escape_string($_POST['c_type2']);
    
if(!preg_match("/^[a-zA-Z]+$/",$uname)){
    $uname_error="Name mist contain only alphabets and space";
}
if(strlen($cont) < 10){
    $cont_error="Mobil number must be minimum of 10 charaters";
}
if(!preg_match("/^[a-zA-Z]+$/",$add)){
    $add_error="Plase enter Address";
}
if(!strlen($date)){
    $date_error="Select a Date";
}
if(!preg_match("/^[a-zA-Z]+$/",$name)){
    $name_error="Select name";
}
if($model=""){
    $model_error="Select Model";
}
   
    
        if($DBcon->query="INSERT INTO c_customer(c_name,c_cont,c_add,c_date,c_type1,c_type2) VALUES('" . $uname ."','" . $cont ."','" . $add ."','" . $date ."','" . $name ."','" .$model ."')"){
            header("location home.php");
            exit();
        }
        else{
            echo "ERROR:".$sql . "" .$DBcon->error(); 

        }
      
    $DBcon->close();
}
?>







<!DOCTYPE html PUBLIC>

<html lang="en">
    <head>
        <meta charset="UTF-8">
</head><center>
<body background="dpw.jpg">
    <div class="container">
        <div class="col-lg-8 col-offset-2">
            <div class="row">
                <div class="page-header">
</div>
<form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST">
 

    <img src="dlogo.jpg" width="15%" heigth="20%"><br>
    <form method="POST" id="register-form" ><br>
    
        <div class="form-group">
<label> Enater name</label>   <input type="text" name="c_name" id="c_name" placeholder="Name"maxlenth="50" /><br><br>
<span class="text-danger"><?php if (isset($uname_error)) echo $uname_error;?></span>
    </div>
    <div class="form-group">
<label> Contact</label><input type="text" name="c_cont" id="c_cont" placeholder="Contact" maxlenth="10" required=""/><br><br>
<span class="text-danger"><?php if (isset($cont_error)) echo $cont_error;?></span>
    </div>
    <div class="form-group">
<label>Address</lable><input type="text" name="c_add" id="c_add" placeholder="Address" required=""/><br><br>
<span class="text-danger"><?php if (isset($add_error)) echo $add_error;?></span>
    </div>
    <div class="form-group">
 <label>Date</label><input type="date" name="c_date" id="c_date" placeholder="Date" required=""/><br><br>
 <span class="text-danger"><?php if (isset($date_error)) echo $date_error;?></span>
    </div>
    <div class="form-group">
 <label>Please Select Name</label><select style="margin-bottom:10px;" id="c_type1" name="c_type1" class="form-control"><br><br>
  
   <option value="">Please Select Role</option>
  <option value="Digvijay">Digvijay </option>
  <option value="samarth">samarth</option>
  <option value="pratik">pratik</option>
  
</select><br>
<span class="text-danger"><?php if (isset($name_error)) echo $name_error;?></span>
    </div>
    <div class="form-group">
<label>Please Select Model</label><select style="margin-bottom:10px;" id="c_type2" name="c_type2" class="form-control"><br><br>
  
   <option value="">Please Select Role</option>
  <option value="model1">model1 </option>
  <option value="model2">model2</option>
  <option value="model3">model3</option>
  
</select><br>
<span class="text-danger"><?php if (isset($model_error)) echo $model_error;?></span>
    </div>
<button type="submit" class="btn btn-primary" name="signup">Submit &nbsp;</button><br><br>
<button><a href="admin.php">Logout</a></button>
<button><a href="searchc.php">Searh</a></button>
</body></center>
    </div></div></div>
</html>