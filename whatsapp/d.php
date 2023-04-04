<?php 
include ('dbconnectw.php');
 

if(isset($_POST['btn-signup']))
{
    $time=time();
    $actual_mess_name = $_POST['l_a'];
     $remess=$actual_mess_name.$time;
   
    $check_mess=$DBcon->query("SELECT l_a FROM ab WHERE l_a='$remess'");
     $count=$check_mess->num_rows;
    

 if($count==0)
 {
     $query="INSERT INTO whatsapp.ab(l_a) VALUES('$remess')";
    $query1=$DBcon->query("SELECT * FROM ab WHERE flag LIKE '0'");
    while($row2=$query1->fetch_array())
  {    
         
    }
       $query2=$DBcon->query("SELECT * FROM ba WHERE ba_flag LIKE '0'");
        while($row1=$query2->fetch_array())
            {
                
                    
            }
       
  }  else{
        $msg="sorry email already taken !";
    }
    $DBcon->close();
}
  
?>
