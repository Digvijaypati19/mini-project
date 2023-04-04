<html>
<form action="" method="POST">
    Search By User value: <br>
    <input type="text" name="searchname"></br>

    <input type ="submit" name="search">
</form>
</html>


<?php
require_once("configc.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query("SELECT * FROM user WHERE l_username LIKE '%$search%'");
    while($row = mysqli_fetch_array($con,$sql))
    {
        echo$row  ['l_id']."<br>";
        echo$row  ['l_username']."<br>";
    }
    print_r ($row);
}
?>