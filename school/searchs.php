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
   <h1> Patil Highschool </h1></font>
</body>
</html>

<html><center>
<form action="" method="POST">
    <font color="green">
   <h2> Search By User Standard: </h2><br></font>
    <input type="divsion" name="searchname" placeholder=" Search "></br>

    <input type ="submit" name="search"><br>

    <button><a href="exam.php">logout</a></button><br>
    <button><a href="checks2.php">Home Page</a></button>
   <br> ************** 
 <font color="green">  <br><br> Detalis<br>
</form></font>

<td>
    <table width="180px" align="left" style="">
        <tr>
            <td>Select date : <br >
            <input type="date" name="d_birth" id="d_birth" value=""
  placeholder="Birthday"></br></br>
</td></table></tr>

<?php
require_once("configE.php");
$s=0;
$p=0;
$a=0;
if($_SERVER['REQUEST_METHOD'] == "POST")

{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT a_id FROM attendes WHERE a_name LIKE '%$search%' OR a_stan LIKE '%$search%'OR a_div LIKE '%$search%'OR a_cont LIKE '%$search%' OR a_attendes LIKE '%$search%'");

   
    while($row = mysqli_fetch_array($sql))
   
    
    { 
        
        
        $s=$s+1;
    }   
       
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $search=$_POST["searchname"];
        $sql=mysqli_query($con,"SELECT a_id FROM attendes WHERE  a_stan LIKE '%$search%' AND a_attendes LIKE '0' ");
        
        while($row = mysqli_fetch_array($sql))

        {
           
            
            
            $a=$a+1;
             
            
        }
           
    }  
         
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $search=$_POST["searchname"];
        $sql=mysqli_query($con,"SELECT a_id FROM attendes WHERE a_stan LIKE '%$search%' AND a_attendes LIKE '1'  ");
        
        while($row = mysqli_fetch_array($sql))

        {
            
            $p=$p+1;
             
            
        }
           
    }  
        
           

      
        
    
    ?>
    <table width="100px" align="right" style="margin-left:35px">
    
    <tr>
   <td> Total Absent :<input type ="text" id="txtAbsent" value="<?php print $a;?>" size="10" disabled="disabled"/></td>
          </tr>
          <tr>
              <td>Total Present : <input type="text" id ="txtPresent" value="<?php print $p;?>" size="10" disabled="disabled"/></td>
          </tr>
          <tr>
             <td> Total Strength : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
          </tr>
          </table>
          <?php
         

  
    
    
        


}
?>




<?php

require_once("configE.php");
$p=0;
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["searchname"];
    $sql=mysqli_query($con,"SELECT * FROM attendes WHERE a_name LIKE '%$search%' OR a_stan LIKE '%$search%'OR a_div LIKE '%$search%'OR a_cont LIKE '%$search%'OR a_attendes LIKE '%$search%'");
    
    echo "<table border='1'>
    <tr>
    <th>id</th>

    <th>NAME</th>

    <th>Standard</th>
    <th>Divsion</th>
    <th>Contact</th>
    <th>Attendes</th>
   
    </tr>";
    
    while($row = mysqli_fetch_array($sql))
    {
        
     ?> <tr>
       <td><?php echo $row['a_id'];?> </td>
       <td><?php echo $row['a_name']; ?></td>
        <td><?php echo $row['a_stan'];?></td>
        <td><?php echo $row['a_div'];?></td>
       <td><?php echo $row['a_cont'];?></td>
       <td><?php echo $row['a_attendes'];?></td>
       
        <td><a href="updates2.php? edit=<?php echo $row ['a_id'];?>"><button>Attendes</button></a> </td>
        
        </tr>
        
      <?php
       
       
          


    }

         
        
    
echo"</table>";
       
}

?>

</html></center>