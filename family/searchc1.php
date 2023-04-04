

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
<body background="dph.jpg">
  

</body>
</html>

<html>

<head>
</head>
<body background="c5.jpg">
   

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="red">
   <h1> Patil family </h1></font>
<form action="" method="POST">
    <font color="green">
    Search By User value: <br></font>
    <input type="text" name="searchname" placeholder=" Search "></br>

    <input type ="submit" name="search"><br>
    <button><a href="Ucform.php">Update</a></button>
    <button><a href="family.php">Add Information</a></button><br>
  
  <button><a href="cform.php">logout</a></button><br>
   <br> ************** 
 <font color="gold">  <br><br> Detalis<br>
</form></font>


<?php

require_once("configc.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM family WHERE d_name LIKE '%$search%' OR d_cont LIKE '%$search%'OR d_email LIKE '%$search%'OR d_birth LIKE '%$search%' OR d_add LIKE '%$search%' OR d_blood LIKE '%$search%'");
   
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>CONTACT</th>
    <th>EMAIL</th>
    <th>BIRTHDAY</th>
    <th>ADDERES</th>
    <th>BLOOD</th>
    <th>EDIT</th>
    </tr>";
    while($row = mysqli_fetch_array($sql))
    {
        ?> <tr>
       <td><?php echo $row['d_id'];?> </td>
       <td><?php echo $row['d_name']; ?></td>
        <td><?php echo $row['d_cont'];?></td>
        <td><?php echo $row['d_email'];?></td>
       <td><?php echo $row['d_birth'];?></td>
       <td><?php echo $row['d_add'];?></td>
        <td><?php echo $row['d_blood'];?></td>
        
        <td><a href="updatec2.php?edit=<?php echo $row ['d_id'];?>"><button>Edit</button></a></td>

        </tr>
      <?php
        
    }
    echo"</table>";
}
?>
</html></center>