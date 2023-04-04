
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
    $actual_mess_name = $_POST['b_a'];
     $remess=$actual_mess_name.$time;
   
    $check_mess=$DBcon->query("SELECT n_a FROM ca WHERE n_a='$remess'");
     $count=$check_mess->num_rows;
    $exit;

 if($count==0)
 {
    $query="INSERT INTO ca(c_a) VALUES('$remess')";
    $query1=$DBcon->query("SELECT * FROM ca WHERE flag LIKE '0'");
    while($row2=$query1->fetch_array())
  {    
     ?>
   <div class="field mess">
   <?php echo $row2['n_a']."<br/>". "<br/>"?>
   </div><?php      
    }
       $query2=$DBcon->query("SELECT * FROM ac WHERE ac_flag LIKE '0'");
        while($row1=$query2->fetch_array())
            {
                ?>
                   <div class="field mess">
                   <?php echo $row1['l_c']."<br/>". "<br/>"?>
                    </div><?php
            }
       
  }  else{
        $msg="sorry email already taken !";
    }
    $DBcon->close();
}
  
?>

 
 <br><br><br><br><br>
 Enter a massage<input type="text" name="n_a" id="n_a" value=""
  placeholder="massage" ></br></br>
 
<button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
<button><a href="homew3.php">Home</a></button>
<button type="submit" name="btn-signup">Start </button><br><br>
</form></center>
</body>
</html>