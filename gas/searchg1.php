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
   <h1> DP Gas</h1></font>
</body>
</html>
     <html><center>
         <form action="" method="POST">
             <font color="green">
                 <h2> Search By user Booking Date:</h2><br></font>
            Search a Date <input type="date" name="searchname" placeholder=" Search "></br>

                  <input type ="submit" name="search"><br>

               <button><a href="staffg.php">logout</a></button><br> 
                <button><a href="homeg.php">Home Page</a></button> 
            <br> ************** 
          <font color="green">  <br><br> Detalis<br>
          </form></font>

          
<?php

require_once("configg.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM g_user WHERE g_name LIKE '%$search%' OR g_date LIKE '%$search%'");
    
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>Coutact</th>
    <th>Email</th>
    <th>Date</th>
    <th>Adderes</th>
   
    </tr>";
    
    while($row = mysqli_fetch_array($sql))
    {
        
     ?> <tr>
       <td><?php echo $row['g_id'];?> </td>
       <td><?php echo $row['g_name']; ?></td>
        <td><?php echo $row['g_cont'];?></td>
        <td><?php echo $row['g_email'];?></td>
       <td><?php echo $row['g_date'];?></td>
       <td><?php echo $row['g_add'];?></td>
       
       
        
        </tr>
        
      <?php
       
       
          


    }

         
        
    
echo"</table>";
       
}

?>

</html></center>