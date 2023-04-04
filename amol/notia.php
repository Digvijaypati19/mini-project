

<html>
<head>
   
</head>
<body background="dpw.jpg">
  
<center>    

  <img src="dlogo.jpg"width="15%"heigth="20%">
  <font color="white">
   <h1> Patil Motars </h1></font>


<?php
session_start();
require_once('dbconnecta.php');
if(isset($_SESSION['check']))
{
  $checkname=$_SESSION['check'];
    $query=$DBcon->query("SELECT * FROM w_mass WHERE w_type='$checkname'");
    while($row=$query->fetch_array())
    {
      echo  $row['w_name']."<br/>";
    }
}




?>
</body>
 <button><a href="homea.php">Home</a></button>
 <button><a href="logout.php">Logout</a></button>
</html></center>