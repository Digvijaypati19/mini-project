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
<form method="POST" id="register-form">
    <font color="green">
    Search By User value: <br></font>
    <input type="text" name="searchname" placeholder=" Search "></br>

    <button type="submit" name="btn-signup">Submit </button><br><br>
    <button><a href="addh.php">Add Details</a></button>
    <button><a href="homeh.php">Home</a></button>
    <button><a href="loginh.php">logout</a></button><br>
   <br> ************** 
 <font color="green">  <br><br> Detalis<br>
</form></font>


<?php

require_once("dbconnect.php");
if(isset($_POST['btn-signup']))
{
    $search=$_POST["searchname"];
    $query=$DBcon->query("SELECT h_id, h_name,h_cont,h_add,h_disses,h_date_in,h_date_out,h_bill FROM tbl_patient WHERE h_name LIKE '%$search%' OR h_cont LIKE '%$search%'OR h_disses LIKE '%$search%'OR h_date_in LIKE '%$search%'");
    
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
    while( $row=$query->fetch_array())
    {
     ?> <tr>
       <td><?php echo $row['h_id'];?> </td>
       <td><?php echo $row['h_name']; ?></td>
        <td><?php echo $row['h_cont'];?></td>
        <td><?php echo $row['h_add'];?></td>
       <td><?php echo $row['h_disses'];?></td>
       <td><?php echo $row['h_date_in'];?></td>
        <td><?php echo $row['h_date_out'];?></td>
        <td><?php echo $row['h_bill'];?></td>
        <td><a href="update2h.php?edit=<?php echo $row ['h_id'];?>"><button>Edit</button></a></td>

        </tr>
      <?php
    }
echo"</table>";
       
}
?>
</html></center>