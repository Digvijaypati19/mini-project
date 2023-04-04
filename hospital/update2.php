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
<form action="" method="POST">
    <font color="green">
    Enter a Details <br></font>

<?php
include("configh.php");

$get=$_GET['edit'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $cont=$_POST['cont'];
    $add=$_POST['add'];
    $disses=$_POST['disses'];
    $date_in=$_POST['date_in'];
    $date_out=$_POST['date_out'];
    $bill=$_POST['bill'];
    $qry1=mysqli_query($con,"UPDATE p_patient SET q_name='$name',q_cont='$cont',q_add='$add',q_disses='$disses',q_date_in='$date_in',q_date_out='$date_out',q_bill='$bill' WHERE q_id='$get' ");
    if($qry1)
    {
        echo "successful updated";

    }
    else{
        echo"not";
    }
}

$sql=mysqli_query($con,"SELECT * FROM p_patient WHERE q_id='$get'");

while($row = mysqli_fetch_array($sql))
{
    ?>
    <form action="" method="POST">
     <input type="text" value="<?php echo $row['q_name'];?>"name="name"><br><br>
     <input type="text" value="<?php echo $row['q_cont'];?>" name="cont">
     <input type="text" value="<?php echo $row['q_add'];?>" name="add"> 
     <input type="text" value="<?php echo $row['q_disses'];?>" name="disses">
     <input type="date" value="<?php echo $row['q_date_in'];?>" name="date_in">
     <input type="date" value="<?php echo $row['q_date_out'];?>" name="date_out">  
     <input type="text" value="<?php echo $row['q_bill'];?>" name="bill">
    <br> <button type="submit" name ="submit">Update</button><br><br>
     <button><a href="patient.php">Add Details</a></button>
   <button><a href="Uform.php">Update</a></button>
   <button><a href="searchc.php">search</a></button>
   <button><a href="hform.php">logout</a></button><br>
   </form>
    <?php
    }  

 ?>   