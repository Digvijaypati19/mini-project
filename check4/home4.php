<?php
include "lock4.php";
?>
<html>

    <h1>Welcome to home page </h1>
    <button><a href="logout4.php">logout</a></button>
</html>



<html>
    <form action="" method="POST">
        Search By User value<br>
        <input type="taxt" name="searchname" placeholder="Search"><br>
        <input type="submit" name="search">
        <br>************
        <br>Result<br>
</foem>
</html>














<?php
require_once("config4.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $search=$_POST["searchname"];
    $sql= mysqli_query($con,"SELECT * FROM user3 WHERE v_name LIKE '%$search%'OR v_email LIKE '%$search%' OR v_cont LIKE '%$search%' ");
    while($row = mysqli_fetch_array($sql))
    {
        echo$row["v_id"]."<br>";
        echo$row["v_name"]."<br>";
        echo$row["v_email"]."<br>";
        echo$row["v_birth"]."<br>";
    }
    print_r($row);
}
?>