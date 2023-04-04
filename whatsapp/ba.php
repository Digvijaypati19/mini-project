
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body >
    
<center>
  
<form  method="POST" id="register-form" >
   
     
  <h1>Realtime Chat App</h1>
   <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
 
<?php
include ('dbconnectw.php');


if(isset($_POST['btn-signup']))
{
    $time=time();
    $actual_mess_name = $_POST['ba_mess'];
     $remess=$actual_mess_name.$time;
   
    $check_mess=$DBcon->query("SELECT ba_mess FROM ba WHERE ba_mess='$remess'");
     $count=$check_mess->num_rows;
    $exit;

 if($count==0)
 {
    $query="INSERT INTO ba(ba_mess) VALUES('$remess')";
    $query1=$DBcon->query("SELECT * FROM ba WHERE flag LIKE '0'");
    while($row2=$query1->fetch_array())
  {    
     ?>
   <div class="field mess">
   <?php echo $row2['l_a']."<br/>". "<br/>"?>
   </div><?php      
    }
       $query2=$DBcon->query("SELECT * FROM ba WHERE ba_flag LIKE '0'");
        while($row1=$query2->fetch_array())
            {
                ?>
                   <div class="field mess">
                   <?php echo $row1['ba_mess']."<br/>". "<br/>"?>
                    </div><?php
            }
       
  }  else{
        $msg="sorry email already taken !";
    }
    $DBcon->close();
}
  
?>

 
 <br><br><br><br><br>
 Enter a massage<input type="text" name="ba_mess" id="ba_mess" value=""
  placeholder="massage" ></br></br>
 
<button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
<button><a href="homew2.php">Home</a></button>
<button type="submit" name="btn-signup">Start </button><br><br>
</form></center>
</body>
</html>