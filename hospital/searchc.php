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
    Search By User value: <br></font>
    <input type="text" name="searchname" placeholder=" Search "></br>

    <input type ="submit" name="search"><br>
    <button><a href="patient.php">Add Details</a></button>
    <button><a href="Uform.php">Update</a></button>
    <button><a href="hform.php">logout</a></button><br>
   <br> ************** 
 <font color="green">  <br><br> Detalis<br>
</form></font>


<?php

require_once("configh.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM p_patient WHERE q_name LIKE '%$search%' OR q_cont LIKE '%$search%'OR q_add LIKE '%$search%'OR q_disses LIKE '%$search%' OR q_date_in LIKE '%$search%' OR q_date_out LIKE '%$search%'OR q_bill LIKE '%$search%'");
    
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>CONTACT</th>
    <th>ADDRESS</th>
    <th>DISSES</th>
    <th>DATE IN</th>
    <th>DATE OUT</th>
    <th>BILL</th>
    </tr>";
    while($row = mysqli_fetch_array($sql))
    {
     ?> <tr>
       <td><?php echo $row['q_id'];?> </td>
       <td><?php echo $row['q_name']; ?></td>
        <td><?php echo $row['q_cont'];?></td>
        <td><?php echo $row['q_add'];?></td>
       <td><?php echo $row['q_disses'];?></td>
       <td><?php echo $row['q_date_in'];?></td>
        <td><?php echo $row['q_date_out'];?></td>
        <td><?php echo $row['q_bill'];?></td>
        <td><a href="update2.php?edit=<?php echo $row ['q_id'];?>"><button>Edit</button></a></td>

        </tr>
      <?php
    }
echo"</table>";
       
}
?>
</html></center>