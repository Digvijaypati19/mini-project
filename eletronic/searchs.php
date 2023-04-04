 

<html>
<head><center>
    <style>

        table 
        {
            border-style:solid;
            border-width:5px;
            border-color:orange;
        }
        </style>
</head>
<body background="dpw.jpg">
  

</body>
</html>

<html>

<head>
</head>

   

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="red">
   <h1> D P Eletronic</h1></font>
<form action="" method="POST">
    <font color="green">
    Search By User value: <br></font>
    <input type="text" name="searchname" placeholder=" Search "></br>
    <input type="date" name="date" placeholder=" Search "></br>

    <input type ="submit" name="search"><br>
    <button><a href="staffe.php">logout</a></button>
    <button><a href="adds.php">Add Information</a></button><br>
  
  
   <br> ************** 
 <font color="gold">  <br><br> Detalis<br>
</form></font>


<?php

require_once("confige.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM work WHERE z_name LIKE '%$search%' OR z_date LIKE '%$search%'");
   
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>CONTACT</th>
    <th>Date</th>
    <th>ADDERES</th>
    <th>Phone</th>
    <th>Work</th>
    <th>Photo</th>
    <th>Bill</th>
    </tr>";
    while($row = mysqli_fetch_array($sql))
    {
        ?> <tr>
       <td><?php echo $row['z_id'];?> </td>
       <td><?php echo $row['z_name']; ?></td>
        <td><?php echo $row['z_cont'];?></td>
        <td><?php echo $row['z_date'];?></td>
       <td><?php echo $row['z_add'];?></td>
       <td><?php echo $row['z_phone'];?></td>
        <td><?php echo $row['z_work'];?></td>
        <?php $img=$row['z_photo'];?>
        <?php echo"<td>"."<img style='width:100%; height:50px;'src='photos/$img'>"."</td>";?>
        <td><?php echo $row['z_bill'];?></td>
        
        <td><a href="updatec2.php?edit=<?php echo $row ['z_id'];?>"><button>Edit</button></a></td>

        </tr>
      <?php
        
    }
    echo"</table>";
}
?>
</html></center>