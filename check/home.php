<?php
include "lock.php";
?>
<html><center>
    <h1>Welcome to home page </h1>
    <button><a href="logout.php">logout</a></button>
</html></center>



<html><center>
<form action="" method="POST">
    Search By User value: <br>
    <input type="text" name="searchname" placeholder=" Search "></br>

    <input type ="submit" name="search"><br>
   <br> ************** 
   <br> Result
</form>


<?php

require_once("configc.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM user WHERE l_username LIKE '%$search%'");
    while($row = mysqli_fetch_array($sql))
    {
       echo$row  ['l_id']."<br>";
        echo$row['l_username']."<br>";
    }
    print_r($row);
}
?>
</html></center>

