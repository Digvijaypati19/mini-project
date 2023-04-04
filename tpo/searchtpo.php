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
   <h2> Search By User Standard: </h2><br></font>
    <input type="marks" name="searchname" placeholder=" 10th marks "></br>
    <input type="marks12" name="searchname" placeholder="12th marks"></br>
    <input type="marksg" name="searchname" placeholder=" Enter CGPA"></br>

    <input type ="submit" name="search"><br>

    <button><a href="studentpo.php">logout</a></button><br>
  
   <br> ************** 
 <font color="green">  <br><br> Detalis<br>
</form></font>


<?php

require_once("configtpo.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM studenttpo WHERE e_marks10 LIKE '%$search%' OR e_marks12 LIKE '%$search%'OR e_cgpa LIKE '%$search%'");
    
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>Email</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Marks 10</th>
    <th>Marks 12</th>
    <th>CGPA</th>
    <th>Resume</th>
   
    </tr>";
    
    while($row = mysqli_fetch_array($sql))
    {
        
     ?> <tr>
       <td><?php echo $row['e_id'];?> </td>
       <td><?php echo $row['e_name']; ?></td>
        <td><?php echo $row['e_email'];?></td>
        <td><?php echo $row['e_cont'];?></td>
       <td><?php echo $row['e_collage'];?></td>
       <td><?php echo $row['e_marks10'];?></td>
       <td><?php echo $row['e_marks12'];?></td> 
       <td><?php echo $row['e_cgpa'];?></td>
       
       <td><a href="updattpo.php?edit=<?php echo $row ['e_id'];?>"><button>Resume</button></a></td>
        
        </tr>
        
      <?php
       
       
          


    }

         
        
    
echo"</table>";
       
}

?>

</html></center>