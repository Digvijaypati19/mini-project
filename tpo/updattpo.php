<html>
<head>
</head>
<body background="dpf.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> DP training And Placement </h1></font>
</body>
</html>

<html><center>
<form action="" method="POST">
    <font color="green">
    Enter a Details <br></font>

<?php
include("configtpo.php");
$path ="tpo/";
$get=$_GET['edit'];
if(isset($_POST['submit']))

 {
    $name=$_POST['e_name'];
    $resume=$_POST['e_resume'];
   
   
    
    $qryt=mysqli_query($con,"INSERT INTO tpo.downlode(d_name,d_resume)VALUES ('$name','$resume')");
    if($qryt)
    {
        ?>
        <iframe src="tpo/<?php echo $resume ; ?>" height="700" width="800"></iframe>
        <button><a href="searchtpo.php">students</a></button>
    <?php
      
      
    }
    else{
        echo"not";
    }
}

$sql=mysqli_query($con,"SELECT * FROM studenttpo WHERE e_id='$get'");

while($row = mysqli_fetch_array($sql))
{
    ?>
    <form action="" method="POST">
     <input type="text" value="<?php echo $row['e_name'];?>"name="e_name"><br><br>
     <input type="text" value="<?php echo $row['e_resume'];?>" name="e_resume"><br><br>
     
    <br> <button type="submit" name ="submit">OPEN</button><br><br>
     <button><a href="searchtpo.php">students</a></button>
   
   </form>
    <?php
    }  
    
 ?>   