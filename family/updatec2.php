<html>
<head>
</head>
<body background="dph.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> Patil family </h1></font>
</body>
</html>

<html><center>
<form action="" method="POST">
    <font color="green">
    Enter a Details <br></font>

<?php
include("configc.php");

$get=$_GET['edit'];
if(isset($_POST['submit'])){
    $a=$_POST['name'];
    $b=$_POST['cont'];
    $c=$_POST['email'];
    $d=$_POST['birth'];
    $e=$_POST['add'];
    $f=$_POST['blood'];
    
    $qry1=mysqli_query($con,"UPDATE family SET d_name='$a',d_cont='$b',d_email='$c',d_birth='$d',d_add='$e',d_blood='$f' WHERE d_id='$get' ");
    if($qry1)
    {
        echo "successful updated";

    }
    else{
        echo"not";
    }
}

$sql=mysqli_query($con,"SELECT * FROM family WHERE d_id='$get'");

while($row = mysqli_fetch_array($sql))
{
    ?>
    <form action="" method="POST">
     <input type="text" value="<?php echo $row['d_name'];?>"name="name"><br><br>
     <input type="text" value="<?php echo $row['d_cont'];?>" name="cont">
     <input type="text" value="<?php echo $row['d_email'];?>" name="email"> 
     <input type="text" value="<?php echo $row['d_birth'];?>" name="birth">
     <input type="text" value="<?php echo $row['d_add'];?>" name="add">
     <input type="text" value="<?php echo $row['d_blood'];?>" name="blood">  
     
    <br> <button type="submit" name ="submit">Update</button><br><br>
    <button><a href="Ucform.php">Update</a></button>
    <button><a href="family.php">Add Information</a></button><br>
  <button><a href="searchc1.php">search</a></button>
  <button><a href="cform.php">logout</a></button><br>
   </form>
    <?php
    }  

 ?> 