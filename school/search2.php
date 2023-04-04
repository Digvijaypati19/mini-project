<html>
<head>
    <style>

        table 
        {
            border-style:solid;
            border-width:5px;
            border-color:orange;
        }
        </style>
</head>
<body background="dpf.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> Patil Highschool </h1></font>
</body>
</html>

<html><center>
<form action="" method="POST">
    <font color="green">
   <h2> Search Subject Code: </h2><br></font>
    <input type="subject" name="searchname" placeholder=" Search "></br>

    <input type ="submit" name="search"><br>

    <button><a href="exam.php">logout</a></button><br>
    <button><a href="checks2.php">Home Page</a></button>
   <br> ************** 
 <font color="green">  <br><br> Detalis<br>
</form></font>

<?php

require_once("configE.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM exam WHERE e_subject LIKE '%$search%' OR e_standred LIKE '%$search%' OR e_date LIKE '%$search%'OR e_time_in LIKE '%$search%'OR e_time_out LIKE '%$search%'");
    
    echo "<table border='1'>
    <tr>
    <th>id</th>
    <th>Standred</th>
    <th>Subject</th>
    <th>Marks</th>
    <th>Date</th>
    <th>Time Start</th>
    <th>Time End</th>
    <th>Exam</th>
   
    </tr>";
    
    while($row = mysqli_fetch_array($sql))
    {
        
     ?> <tr>
       <td><?php echo $row['e_id'];?> </td>
       <td><?php echo $row['e_standred'];?> </td>
       <td><?php echo $row['e_subject']; ?></td>
        <td><?php echo $row['e_marks'];?></td>
        <td><?php echo $row['e_date'];?></td>
       <td><?php echo $row['e_time_in'];?></td>
       <td><?php echo $row['e_time_out'];?></td>
       
        <td><a href="studentexam.php? edit=<?php echo $row ['e_id'];?>"><button>Start</button></a> </td>
        
        </tr>
        
      <?php
       
       
          


    }

         
        
    
echo"</table>";
       
}

?>

</html></center>