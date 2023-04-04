<html>
<head>
</head>
<body background="dpf.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> Patil Hospital </h1></font>
</body>
</html>

<html><center>
<form action="" method="POST">
    <font color="green">
    Enter a Details <br></font>

<?php
include("configE.php");

$get=$_GET['edit'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $stan=$_POST['stan'];
    $div=$_POST['div'];
    $cont=$_POST['cont'];
    $attendes=$_POST['attendes'];
    
    $qry1=mysqli_query($con,"UPDATE attendes SET a_name='$name',a_stan='$stan',a_div='$div',a_cont='$cont,a_attendes=$attendes' WHERE a_id='$get' ");
    if($qry1)
    {
        echo "successful updated";
        header("location:searchs.php");
    }
    else{
        echo"not";
    }
}

$sql=mysqli_query($con,"SELECT * FROM attendes WHERE a_id='$get'");
$p=0;
while($row = mysqli_fetch_array($sql))
{
    ?>
    <form action="" method="POST">
     <input type="text" value="<?php echo $row['a_name'];?>"name="name"><br><br>
     <input type="text" value="<?php echo $row['a_stan'];?>" name="stan"><br><br>
     <input type="text" value="<?php echo $row['a_div'];?>" name="div"> <br><br>
     <input type="text" value="<?php echo $row['a_cont'];?>" name="cont"><br><br>
     <input type="text" value="<?php echo $row['a_attendes'];?>" name="attendes"><br><br>
     
    <br> <button type="submit" name ="submit">Update</button><br><br>
     <button><a href="studentss.php">students</a></button>
   <button><a href="form.php">Update</a></button>
   <button><a href="searchs.php">search</a></button>
   <button><a href="exam.php">logout</a></button><br>
   </form>
    <?php
    }  
    
 ?>   