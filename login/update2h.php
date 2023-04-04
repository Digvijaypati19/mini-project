<html>
<head>
</head>
<body background="dph.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> Patil Hospital </h1></font>
</body>
</html>

<html><center>
<form  method="POST" id="register-form">
    <font color="green">
    Enter a Details <br></font>

<?php
include("dbconnect.php");

$get=$_GET['edit'];
if(isset($_POST['btn-signup'])){
    $name=$_POST['name'];
    $cont=$_POST['cont'];
    $add=$_POST['add'];
    $disses=$_POST['disses'];
    $date_in=$_POST['date_in'];
    $date_out=$_POST['date_out'];
    $bill=$_POST['bill'];
    $qry1=$DBcon->query("UPDATE tbl_patient SET h_name='$name',h_cont='$cont',h_add='$add',h_disses='$disses',h_date_in='$date_in',h_date_out='$date_out',h_bill='$bill' WHERE h_id='$get' ");
    if($qry1)
    {
        echo "successful updated";

    }
    else{
        echo"not";
    }
}

$sql=$DBcon->query("SELECT * FROM tbl_patient WHERE h_id='$get'");

while($row=$sql->fetch_array())
{
    ?>
    <form action="" method="POST">
     <input type="text" value="<?php echo $row['h_name'];?>"name="name"><br><br>
     <input type="text" value="<?php echo $row['h_cont'];?>" name="cont">
     <input type="text" value="<?php echo $row['h_add'];?>" name="add"> 
     <input type="text" value="<?php echo $row['h_disses'];?>" name="disses">
     <input type="date" value="<?php echo $row['h_date_in'];?>" name="date_in">
     <input type="date" value="<?php echo $row['h_date_out'];?>" name="date_out">  
     <input type="text" value="<?php echo $row['h_bill'];?>" name="bill">
    <br> <button type="submit" name="btn-signup">Update</button><br><br>
     <button><a href="addh.php">Add Details</a></button>
   
   <button><a href="searchh.php">search</a></button>
   <button><a href="loginh.php">logout</a></button><br>
   </form>
    <?php
    }  

 ?>   