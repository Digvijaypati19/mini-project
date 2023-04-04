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
<body background="dpw.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> Patil Motars </h1></font>
</body>
</html>

<html><center>
<form method="POST" id="register-form">
    <font color="green">
    Search By User value: <br></font>
    <input type="text" name="searchname" placeholder=" Search "></br>

    <button type="submit" name="btn-signup">Submit </button><br><br>
    <button><a href="addc.php">Add Details</a></button>
    <button><a href="homec.php">Home</a></button>
    <button><a href="admin.php">logout</a></button><br>
   <br> ************** 
 <font color="green">  <br><br> Detalis<br>
</form></font>


<?php

require_once("dbconnecta.php");
if(isset($_POST['btn-signup']))
{
    $search=$_POST["searchname"];
    $query=$DBcon->query("SELECT c_id, c_name,c_cont,c_add,c_date,c_type1,c_type2 FROM c_customer WHERE c_name LIKE '%$search%' OR c_cont LIKE '%$search%'OR c_add LIKE '%$search%'OR c_date LIKE '%$search%'OR c_type1 LIKE '%$search%'OR c_type2 LIKE '%$search%'");
    
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>CONTACT</th>
    <th>ADDRESS</th>
    <th>Date</th>
    <th>worker</th>
    <th>Model</th>
    
    </tr>";
    while( $row=$query->fetch_array())
    {
     ?> <tr>
       <td><?php echo $row['c_id'];?> </td>
       <td><?php echo $row['c_name']; ?></td>
        <td><?php echo $row['c_cont'];?></td>
        <td><?php echo $row['c_add'];?></td>
       <td><?php echo $row['c_date'];?></td>
       <td><?php echo $row['c_type1'];?></td>
        <td><?php echo $row['c_type2'];?></td>
        
        

        </tr>
      <?php
    }
echo"</table>";
       
}
?>
</html></center>