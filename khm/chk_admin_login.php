<?php
session_start();
error_reporting(0);
?>
<?php 
include "dbinfo.php";
//checking for Restaraunt login here
//date 01/04/2014
 $uname=mysql_real_escape_string($_POST['username']);
 $passwd=mysql_real_escape_string($_POST['password']);
$pass=$passwd;
$status=1;
$admin=$_POST['admin'];
//echo $uname;
//echo $passwd;
if($admin=='addver')
{
	$qry=mysql_query("select * from member_login where m_uname='".$uname."' and m_pass='".$pass."' and status='".$status."' ");
if(mysql_num_rows($qry) == 0 )
{
	echo "<font color='red' size='2' face='verdana'>wrong username or password</font>";				
}
else
{	     while($row=mysql_fetch_array($qry))
	     { 
		$_SESSION['memuserid']=$row['m_log_id'];
	        }
		               if(isset($_SESSION['memuserid']))
				{	    
				    echo '1';
			
		                }
}	     
}
else if($admin=='admin')
{
		$qry=mysql_query("select login_master_id,username,password,master_login_status  from login_master where username='".$uname."' and password='".$pass."' and master_login_status='".$status."' ");
if(mysql_num_rows($qry) == 0 )
{
	echo "<font color='red' size='2' face='verdana'>wrong username or password</font>";				
}
else
{
	     while($row=mysql_fetch_array($qry))
	     {	    
			$_SESSION['ruserid']=$row['login_master_id'];
	     }
	       if(isset($_SESSION['ruserid']))
		    { 
			    echo '2';
	        }
}
}
else if($admin=='agency')
{
		$qry=mysql_query("select agency_login_id,agency_id,username,password from agency_login_table where username='".$uname."' and password='".$pass."' and login_status='".$status."' ");
	if(mysql_num_rows($qry) == 0 )
{
	echo "<font color='red' size='2' face='verdana'>wrong username or password</font>";				
}
else
{
	     while($row=mysql_fetch_array($qry))
	     {
		$_SESSION['agencyuserid']=$row['agency_id'];
		
	        }
		               if(isset($_SESSION['agencyuserid']))
				{	    
		//echo $_SESSION['agencyuserid'];
				    echo '3';
			
		                }
	     
	  
}
	
}


?> 
