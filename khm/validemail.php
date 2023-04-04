<?php 
//error_reporting(0);
include "dbinfo.php";
$email=$_POST['email'];
$qry=mysql_query("select cust_email from customer where cust_email='".$email."'");
$count=mysql_num_rows($qry);
if($count>=1)
{
	echo "false";
}
else
{
	echo "true";
}       
?>
